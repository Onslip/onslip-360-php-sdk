<?php declare(strict_types=1); namespace Onslip360\Hawk;

/* This file contains the bare minimum of the client-side code from Eurolink's
   Hawk library `eurolink/hawk`, somewhat rewritten and updated for PHP 8.
   Original license:

Copyright (c) 2015 Eurolink <info@eurolink.co>

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

*/

class Credentials {
    function __construct(
        /** Key ID */
        public string $id,
        /** Key value */
        public string $key,
        /** Hash algorithm */
        public string $algorithm,
    ) {}
}

class HeaderOptions {
    function __construct(
        /** Credentials */
        public Credentials $credentials,
        /** Application specific data sent via the ext attribute */
        public ?string $ext = null,
        /** A pre-calculated timestamp */
        public ?int $timestamp = null,
        /** A pre-generated nonce */
        public ?string $nonce = null,
        /** Time offset to sync with server time (ignored if timestamp provided) */
        public ?int $localtimeOffsetMsec = null,
        /** UTF-8 encoded string for body hash generation (ignored if hash provided) */
        public ?string $payload = null,
        /** Payload content-type (ignored if hash provided) */
        public ?string $contentType = null,
        /** Pre-calculated payload hash */
        public ?string $hash = null,
        /** Oz application id */
        public ?string $app = null,
        /** Oz delegated-by application id */
        public ?string $dlg = null,
    ) {}
}

class HeaderArtifacts {
    function __construct(
        public int $ts,
        public string $nonce,
        public string $method,
        public string $resource,
        public string $host,
        public int $port,
        public ?string $hash,
        public ?string $ext,
        public ?string $app,
        public ?string $dlg,
    ) {}
}

class HeaderResult {
    function __construct(
        public HeaderArtifacts $artifacts,
        public string $field,
    ) {}
}

class AuthenticateOptions {
    function __construct(
        /** optional payload received */
        public ?string $payload = null,
        /** specifies if a Server-Authorization header is required. Defaults to 'false' */
        public ?bool   $required = null,
    ) {}
}

class Client
{
    /**
     * Generate an Authorization header for a given request
     */
    public static function header(string $uri, string $method, HeaderOptions $options): HeaderResult
    {
        // set application time.
        $timestamp = $options->timestamp ?? self::getTimeNowSec($options->localtimeOffsetMsec);

        // parse uri.
        @['scheme' => $scheme, 'host' => $host, 'port' => $port, 'path' => $path, 'query' => $query ] = parse_url($uri);
        $port = $port ?? (strtolower($scheme) === 'http' ? 80 : 443);
        $path = ($path ?? '/') . ($query ? '?' . $query : ''); // Maintain trailing '?'

        // calculate signature.
        $artifacts = new HeaderArtifacts(
            ts:       $timestamp,
            nonce:    $options->nonce ?? base64_encode(random_bytes(9)),
            method:   $method,
            resource: $path,
            host:     $host,
            port:     $port,
            hash:     $options->hash,
            ext:      $options->ext,
            app:      $options->app,
            dlg:      $options->dlg,
        );

        // calculate payload hash.
        if (!$artifacts->hash && $options->payload) {
            $artifacts->hash = self::getPayloadHash($options->payload, $options->credentials->algorithm, $options->contentType);
        }

        // calculate the hmac signature used for the authorization header.
        $mac = self::getArtifactsMac('header', $options->credentials, $artifacts);

        // construct header.
        $has_ext = $artifacts->ext !== null && $artifacts->ext !== '';

        $header = 'Hawk id="' . $options->credentials->id . '"'
            . ', ts="' . $artifacts->ts . '"'
            . ', nonce="' . $artifacts->nonce . '"'
            . ($artifacts->hash ? ', hash="' . $artifacts->hash . '"' : '')
            . ($has_ext ? ', ext="' . self::getEscapeHeaderAttribute($artifacts->ext) . '"' : '')
            . ', mac="' . $mac . '"';

        if ($artifacts->app) {
            $header .= ', app="' . $artifacts->app . '"'
                . ($artifacts->dlg ? ', dlg="' . $artifacts->dlg . '"' : '');
        }

        return new HeaderResult($artifacts, $header);
    }

    /**
     * Validate Server Response
     */
    public static function authenticate(array $headers, Credentials $credentials, HeaderArtifacts $artifacts, AuthenticateOptions $options)
    {
        // parse HTTP WWW-Authenticate header.
        if (isset($headers['www-authenticate'])) {
            @[ 'ts' => $ts, 'tsm' => $tsm ] = self::getParsedAuthorizationHeader($headers['www-authenticate'], ['ts', 'tsm', 'error']);

            // validate server timestamp.
            if ($ts && $tsm !== self::getTimestampHash($ts, $credentials)) {
                throw new \ErrorException('Invalid server timestamp hash');
            }
        }

        // parse HTTP Server-Authorization header.
        if (isset($headers['server-authorization'])) {
            @[ 'mac' => $mac, 'ext' => $ext, 'hash' => $hash ] = self::getParsedAuthorizationHeader($headers['server-authorization'], ['mac', 'ext', 'hash']);

            $artifacts->ext  = $ext;
            $artifacts->hash = $hash;

            if ($mac !== self::getArtifactsMac('response', $credentials, $artifacts)) {
                throw new \ErrorException('Bad response mac');
            }

            if ($options->payload) {
                if (!$hash) {
                    throw new \ErrorException('Missing response hash attribute');
                } else if ($hash !== self::getPayloadHash($options->payload, $credentials->algorithm, $headers['content-type'] ?? null)) {
                    throw new \ErrorException('Bad response payload mac');
                }
            }
        } else if ($options->required) {
            throw new \ErrorException('Missing Server-Authorization header');
        }
    }

    private static function getPayloadHash(string $payload, string $algorithm, ?string $contentType): string {
        $normalized = 'hawk.1.payload' . "\n"
             . self::getParsedContentType($contentType) . "\n"
             . $payload . "\n";

        return self::getBase64Hash($algorithm, $normalized);
    }

    private static function getArtifactsMac(string $type, Credentials $credentials, HeaderArtifacts $artifacts): string {
        $normalized = 'hawk.1.' . $type . "\n"
             . $artifacts->ts . "\n"
             . $artifacts->nonce . "\n"
             . strtoupper($artifacts->method) . "\n"
             . $artifacts->resource . "\n"
             . strtolower($artifacts->host) . "\n"
             . $artifacts->port . "\n"
             . ($artifacts->hash ?? '') . "\n";

        if ($artifacts->ext) {
            $ext = $artifacts->ext;
            $ext = str_replace( "\\", "\\\\", $ext );
            $ext = str_replace( "\n", "\\n", $ext );
            $normalized .= $ext;
        }

        $normalized .= "\n";

        // Web Authorization Protocol (OZ).
        if ($artifacts->app) {
            $normalized .= $artifacts->app . "\n"  // OZ 'Application ID'.
                // Optional 'Delegated By'. Requires 'Application ID'.
                . ($artifacts->dlg ?? '') . "\n";
        }

        return self::getBase64Hash($credentials->algorithm, $normalized, $credentials->key);
    }

    private static function getTimestampHash(string $ts, Credentials $credentials) {
        return self::getBase64Hash($credentials->algorithm, 'hawk.1.ts' . "\n" . $ts . "\n", $credentials->key);
    }

    private static function getBase64Hash(string $algorithm, string $normalized, ?string $key = null): string {
        if ($key) {
            return base64_encode(hash_hmac($algorithm, $normalized, $key, binary: true));
        } else {
            return base64_encode(hash($algorithm, $normalized, binary: true));
        }
    }

    private static function getTimeNowSec(int|null $msOffset): int {
        return intval(floor(round(microtime(as_float: true) * 1000) + ($msOffset ?? 0)) / 1000);
    }

    private static function getEscapeHeaderAttribute(string $attribute): string {
        // escape quotes and slash.
        return preg_replace(['/\\\\/', '/\"/'], ['\\\\', '\\"'], $attribute);
    }

    private static function getParsedContentType(?string $header): string {
        return strtolower(explode(';', $header ?? '')[0]);
    }

    private static $authHeaderRegex = '/^(\w+)(?:\s+(.*))?$/';
    private static $attributePartsRegex = '/(\w+)="([^"\x5c]*)"\s*(?:,\s*|$)/U';
    public static $attributeRegex = '/^[\040\w\!#\$%&\x27\(\)\*\+,\-\.\/\:;<\=>\?@\x5b\x5d\^`\{\|\}~]+$/';

    private static function getParsedAuthorizationHeader(string $header, array $keys): array|null {
        // split scheme from rest of string.
        preg_match(self::$authHeaderRegex, $header, $headerParts);
        @[/* ignored */, $scheme, $attributesStr] = $headerParts;

        if (!$scheme || $attributesStr || strtolower($scheme) !== 'hawk') {
            throw new \ErrorException('Invalid Hawk header syntax');
        }

        $attributes = [];

        $callback = function ($matches) use (&$keys, &$attributes) {
            @[/* ignored */, $key, $val] = $matches;

            // check valid attribute names.
            if (! in_array($key, $keys)) {
                throw new \ErrorException('Unknown attribute: ' . $key);
            }

            // check allowed attribute value characters:
            if (! preg_match(self::$attributeRegex, $val)) {
                throw new \ErrorException('Bad attribute value: ' . $key);
            }

            // check for duplicate attributes.
            if (isset($attributes[$key])) {
                throw new \ErrorException('Duplicate attribute: ' . $key);
            }

            $attributes[$key] = $val;

            return '';
        };

        if (trim(preg_replace_callback(self::$attributePartsRegex, $callback, $attributesStr)) !== '') {
            throw new \ErrorException('Bad header format');
        }

        return $attributes;
    }
}