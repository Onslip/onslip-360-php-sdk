<?php declare(strict_types=1); namespace Onslip360;

use Closure;
use DateTime;
use DateTimeInterface;
use DateTimeZone;
use ErrorException;
use JsonSerializable;
use Onslip360\API\DataStream;
use Onslip360\API\ServerError;
use Onslip360\Hawk\Client;
use Onslip360\Hawk\Credentials;
use Onslip360\Hawk\HeaderOptions;
use ValueError;
use stdClass;
use Throwable;

const eventStreamType = 'text/event-stream';
const jsonType        = 'application/json';
const octetStreamType = 'application/octet-stream';

function dateTime(DateTimeInterface|string|int|float $date): DateTime {
	if (is_string($date)) {
		return DateTime::createFromFormat(DateTime::RFC3339_EXTENDED, $date);
	} else if ($date instanceof DateTimeInterface) {
		return DateTime::createFromInterface($date);
	} else {
		return new DateTime('@' . $date);
	}
}

function isoDate(DateTimeInterface|string|int|float $date): string {
	static $Z = new DateTimeZone('UTC');

	return str_replace('+00:00', 'Z', dateTime($date)->setTimezone($Z)->format(DateTime::RFC3339_EXTENDED));
}

function query(string $pattern, string ...$arguments): string {
	$escape = false;

	return join('', array_map(function ($c) use (&$arguments, &$escape) {
		if (!$escape && $c === '\\') {
			$escape = true; return '';
		} else if (!$escape && $c === '$') {
			return preg_replace('|([\\\\"=:\\[\\]<>])|', '\\\$1', strval(array_shift($arguments) ?? ''));
		} else {
			$escape = false; return $c;
		}
	}, str_split($pattern)));
}

function url(string $pattern, string|int ...$arguments): string {
	$escape = false;

	return join('', array_map(function ($c) use (&$arguments, &$escape) {
		if (!$escape && $c === '\\') {
			$escape = true; return '';
		} else if (!$escape && $c === '$') {
			return rawurlencode(strval(array_shift($arguments) ?? ''));
		} else {
			$escape = false; return $c;
		}
	}, str_split($pattern)));
}

/**
 * @return string[]
 */
function oauthPKCE(): array {
	$e = fn ($s) => rtrim(strtr(base64_encode($s), '+/', '-_'), '=');
	$v = $e(random_bytes(32));
	$c = $e(hash('sha256', $v, binary: true));

	return [ $c, $v ];
}

enum Nil {
	case nil;
}

const nil = Nil::nil;

abstract class Onslip360Object implements JsonSerializable {
	private array $_extended;

	abstract protected static function _fromJson(array $json): array;
	abstract protected function _toJson(): array;

	function getExtended(string $name): string|null|Nil {
		return $this->_extended[$name] ?? null;
	}

	function setExtended(string $name, string|null|Nil $value): static {
		assert(preg_match('/_[a-z0-9]+-([a-z0-9]|[a-z0-9][-a-z0-9]*[a-z0-9])/', $name),
			   'Extended properties must begin with "_" and namespace, and be all lower case');

		if (is_null($value)) {
			unset($this->_extended[$name]);
		} else {
			$this->_extended[$name] = $value;
		}

		return $this;
	}

	static function fromJson(string|array|JsonSerializable|stdClass $json): static {
		if (is_string($json)) {
			$json = json_decode($json, true, flags: \JSON_THROW_ON_ERROR);
		} else if ($json instanceof JsonSerializable) {
			$json = $json->jsonSerialize();
		}

		if ($json instanceof stdClass) {
			$json = get_object_vars($json);
		}

		$result = new static(...static::_fromJson($json));

		foreach ($json as $name => $value) {
			if ($name[0] === '_') $result->setExtended($name, $value);
		}

		return $result;
	}

	/**
	 * @param string[]|array[]|JsonSerializable[]|stdClass[] $json
	 * @return static[]
	 */
	static function fromJsonArray(string|array $json): array {
		if (is_string($json)) {
			$json = json_decode($json, true, flags: \JSON_THROW_ON_ERROR);
		}

		return array_map(static::fromJson(...), $json);
	}

	function jsonSerialize(): array|object {
		$json = array_map(fn ($v) => $v === nil ? null : $v,
			array_filter([...$this->_toJson(), ...($this->_extended ?? [])], fn ($v) => !is_null($v)));

		return empty($json) ? (object) $json : $json;
	}

	protected static function o(array|null $o): static|null {
		return is_null($o) ? null : static::fromJson($o);
	}

	protected static function a(array|null $a): array|null {
		return is_null($a) ? null : static::fromJsonArray($a);
	}

	protected static function e(callable $c, mixed $v): mixed {
		return is_null($v) ? null :
			(is_array($v) ? array_map(fn ($v) => static::e($c, $v), $v) :
				($v instanceof \BackedEnum ? $v : $c($v)));
	}
}

interface ProgressHandler {
	function __invoke(float $percent, int $offset, int $total): void;
}

interface ResponseMetadataHandler {
	/** @param array<string, string> $headers */
	function __invoke(int $status, string $message, array $headers): void;
}

interface RequestHandler {
	function handleRequest(string $method, string $uri, string|null $payload, array $headers): RequestHandlerResponse;
}

class ResponseMetadata implements ResponseMetadataHandler {
	public int $status = 0;

	public string $message = '';

	/** @var array<string, string> */
	public array $headers = [];

	/** @param array<string, string> $headers */
	function __invoke(int $status, string $message, array $headers): void {
		$this->status  = $status;
		$this->message = $message;
		$this->headers = $headers;
	}
}

class RequestHandlerResponse extends ResponseMetadata {
	function __construct(int $status, string $message, array $headers, public string|null $payload) {
		$this->status  = $status;
		$this->message = $message;
		$this->headers = $headers;
	}
}

class RequestException extends \Exception {
	public array $headers;

	function __construct(string $message, ResponseMetadata $rmd, ?\Throwable $cause, public ?ServerError $error) {
		parent::__construct($message . ': ' . $rmd->message . (isset($error?->message) ? (': ' . $error->message) : ''), $rmd->status, $cause);
		$this->headers = $rmd->headers;
	}

	function __toString() {
		$code = $this->error?->code ?? 'no code';

		return __CLASS__ . ": Status {$this->code} [{$code}]: {$this->message}\n";
	}
}

class CURLRequestHandler implements RequestHandler {
	function __construct(
		protected int $connectTimeout = 10_000,
		protected int $timeout = 30_000,
	) {}

	function handleRequest(string $method, string $uri, string|null $payload, array $headers): RequestHandlerResponse {
		$ch = curl_init($uri);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $this->connectTimeout);
		curl_setopt($ch, CURLOPT_TIMEOUT_MS,        $this->timeout);

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST,     $method);
		curl_setopt($ch, CURLOPT_HTTPHEADER,        array_map(fn ($key, $value) => $key . ': ' . $value, array_keys($headers), array_values($headers)));
		curl_setopt($ch, CURLOPT_PATH_AS_IS,        true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,    true);
		curl_setopt($ch, CURLOPT_HEADER,            true);

		if (isset($payload)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS,    $payload);
		}

		$response = curl_exec($ch);
		curl_close($ch);

		if ($response === false) {
			throw new ErrorException(curl_error($ch), curl_errno($ch));
		}

		$hdrsize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$hdrrows = explode("\r\n", substr($response, 0, $hdrsize));
		$payload = substr($response, $hdrsize);
		$headers = array_merge(...array_map(function ($line) {
			$kv = explode(':', $line, 2);
			return count($kv) === 2 ? [ strtolower($kv[0]) => trim($kv[1]) ] : [];
		}, $hdrrows));

		[, $status, $message] = explode(' ', array_shift($hdrrows), 3);

		return new RequestHandlerResponse(intval($status), $message, $headers, isset($headers['content-type']) ? $payload : null);
	}
}

abstract class AbstractAPI {
	/** @var string[] */
	private array $bases;

	/** @var array<string, string|int|float|bool> */
	private array $qp = [];

	/** @var array<string, string|int|float|bool>  */
	private array $headers = [];

	private DateTimeInterface|string|int|float|null $date = null;
	private ProgressHandler|Closure|null $progress = null;
	private ResponseMetadataHandler|Closure|null $metadata = null;

	private RequestHandler|null $requestHandler = null;
	private static RequestHandler|null $defaultRequestHandler = null;

	static function initialize(RequestHandler|null $requestHandler): void {
		static::$defaultRequestHandler = $requestHandler;
	}

	function __construct(
		private string $base,
		private string $realm,
		private string $id,
		private string $key,
	) {
		$this->bases = [ $base ];
		$this->headers = [ 'user-agent' => 'PHP/' . PHP_VERSION ];
		$this->requestHandler = new CURLRequestHandler();
	}

	function realm(): string {
		return $this->realm;
	}

	/**
	 * @param API\ServiceEndpoint[] $eps;
	 */
	function setServiceEndpoints(array|null $ses, bool $keepConstructorEndpoint = true): static {
		$bases = array_map(fn (API\ServiceEndpoint $se) => $se->uri, $ses);

		if ($keepConstructorEndpoint) {
			array_push($bases, $this->base);
		}

		if (!$bases) {
			throw new ValueError('List of API endpoints cannot be empty!');
		}

		$this->bases = $bases;
		syslog(LOG_INFO, 'Using API endpoints ' . implode(', ', $this->bases));
		return $this;
	}

	/**
	 * @return string[]
	 */
	function getServiceEndpoints(): array {
		return $this->bases;
	}

	function failoverServiceEndpoint(): static {
		array_push($this->bases, array_shift($this->bases));
		syslog(LOG_WARNING, 'Failover to API endpoint ' . $this->bases[0]);
		return $this;
	}

	function forRealm(string $realm, ?string $id = null, ?string $key = null): static {
		$that = clone($this);
		$that->realm = $realm;
		$that->id    = $id ?? $this->id;
		$that->key   = $key ?? $this->key;
		return $that;
	}

	function possess(string $userAlias, string $realm): static {
		$that = clone($this);
		$that->realm = $realm;
		$that->id    = "{$this->id} usr:{$userAlias}@{$realm}";
		return $that;
	}

	function at(\DateTimeInterface|string|int|float|null $date): static {
		return $this->_extend(function (self $that) use ($date) {
			$that->date = $date;
		});
	}

	function appName(string|null $name) {
		if (isset($name)) {
			assert(preg_match(':^[-!#$%&\'*+.^_`|~0-9A-Za-z]+(/[-!#$%&\'*+.^_`|~0-9A-Za-z]+)?$:', $name),
			  'Application name must be a valid HTTP product identifier');
		}

		return $this->header('user-agent', trim(($name ?? '') . ' PHP/' . PHP_VERSION));
	}

	function ifMatch(string|null $etag): static {
		return $this->header('if-match', $etag);
	}

	function ifNoneMatch(string|null $etag): static {
		return $this->header('if-none-match', $etag);
	}

	function qp(string $name, string|int|float|bool|null $value): static {
		return $this->_extend(function (self $that) use ($name, $value) {
			if (is_null($value)) {
				unset($that->qp[$name]);
			} else {
				$that->qp[$name] = $value;
			}
		});
	}

	function header(string $name, string|int|float|bool|null $value): static {
		$name = strtolower($name);

		return $this->_extend(function (self $that) use ($name, $value) {
			if (is_null($value)) {
				unset($that->headers[$name]);
			} else {
				$that->headers[$name] = $value;
			}
		});
	}

	function onProgress(ProgressHandler|callable|null $progress): static {
		return $this->_extend(function (self $that) use ($progress) {
			$that->progress = $progress;
		});
	}

	function onResponseMetadata(ResponseMetadataHandler|callable|null $metadata): static {
		return $this->_extend(function (self $that) use ($metadata) {
			$that->metadata = $metadata;
		});
	}

	function requestHandler(RequestHandler|null $requestHandler): static {
		return $this->_extend(function (self $that) use ($requestHandler) {
			$that->requestHandler = $requestHandler;
		});
	}

	private function _extend(callable $fn): static {
		$that = clone($this);
		$fn($that);
		return $that;
	}

	/**
	 * @param array<string, string|bool|int|float> $qp
	 */
	private function _expandURI(string $path, array $qp) {
		$url = $this->bases[0] . $path . (is_null($this->date) ? '': '@' . isoDate($this->date));
		$query = join(';', array_filter(
			array_map(fn ($key, $value) => is_null($value)
					? ''
					: rawurlencode($key) . '=' . rawurlencode(is_bool($value) ? ($value ? 't' : 'f') : strval($value)),
				array_keys($qp), array_values($qp)),
			fn ($qp) => !empty($qp)
		));

		return $url . (empty($query) ? '' : '?' . $query);
	}

	/**
	 * @return Onslip360Object|Onslip360Object[]|null
	 */
	function request(string $method, string $path, Onslip360Object|array|null $payload): array|null {
		$qp = $this->qp;
		[$headers, $result] = $this->sendRequest($method, $path, $qp, $payload);

		// Fetch remaining results in batches if server limited the response
		if ($method === 'GET' && isset($result) && array_is_list($result)) {
			$total     = intval($headers['x-total-count']);
			$offset    = isset($qp['o']) && is_integer($qp['o']) && $qp['o'] >= 0 ? $qp['o'] : 0;
			$count     = isset($qp['c']) && is_integer($qp['c']) && $qp['c'] >= 0 ? $qp['c'] : PHP_INT_MAX;
			$itemsLeft = min($count, $total - $offset) - count($result);

			while ($itemsLeft > 0) {
				$qp['c'] = $itemsLeft;
				$qp['o'] = $offset + count($result);

				if (isset($this->progress)) {
					($this->progress)($total !== 0 ? 100.0 * ($total - $itemsLeft) / $total : 100.0, $total - $itemsLeft, $total);
				}

				[, $newData] = $this->sendRequest('GET', $path, $qp, null);

				array_push($result, ...$newData);
				$itemsLeft = count($newData) ? $itemsLeft - count($newData) : 0;
			}

			if (isset($this->progress)) {
				($this->progress)(100, $total, $total);
			}
		}

		return $result;
	}

	/**
	 * @param array<string, string|bool|int|float> $qp
	 */
	private function sendRequest(string $method, string $path, array $qp, Onslip360Object|array|null $payload): array {
		$requestHandler = $this->requestHandler ?? static::$defaultRequestHandler;

		if (is_null($requestHandler)) {
			throw new ValueError('API request handler not configured!');
		}

		$body = $payload instanceof DataStream ? $payload->data : (isset($payload) ? json_encode($payload, \JSON_THROW_ON_ERROR) : null);
		$type = $payload instanceof DataStream ? $payload->type : (isset($payload) ? jsonType: null);
		$disp = $payload instanceof DataStream ? "inline"       : null; // TODO: Handle name!
		$uri  = $this->_expandURI($path, $qp);

		$headers = [
			'accept'              => jsonType . ', */*',
			'authorization'       => Client::header($uri, $method, new HeaderOptions(
				credentials:         new Credentials($this->id, base64_decode($this->key), 'sha256'),
				payload:             $body,
			))->field,
			'content-type'        => $type,
			'content-disposition' => $disp,
			...$this->headers
		];

		$result = $requestHandler->handleRequest($method, $uri, $body, $headers);

		if (isset($this->metadata)) {
			($this->metadata)($result->status, $result->message, $result->headers);
		}

		if ($result->status < 200 || $result->status >= 400) {
			try { $se = ServerError::fromJson($result->payload ?? ''); } catch (Throwable) {}
			throw new RequestException('Request failed', $result, null, $se ?? null);
		}

		$ct = $result->headers['content-type'] ?? null;

		if ($ct === jsonType && !isset($result->headers['content-disposition'])) {
			return [$result->headers, json_decode($result->payload, true, flags: \JSON_THROW_ON_ERROR)];
		} else if (isset($result->headers['content-disposition'])) {
			return [$result->headers, [
				'size' => intval($result->headers['content-length']),
				'type' => $ct ?? octetStreamType,
				'data' => $result->payload,
				// TODO: Handle name!
			]];
		} else if (isset($ct) && $result->status !== 204 /* No Content */) {
			throw new RequestException("Unsupported media type: {$ct}", $result, null, null);
		} else {
			return [$result->headers, null];
		}
	}
}
