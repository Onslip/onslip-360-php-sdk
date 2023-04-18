<?php

require 'vendor/autoload.php';

use Onslip360\API;
use Onslip360\API\Partial_Product;
use Onslip360\API\Product;
use Onslip360\ResponseMetadata;

use const Onslip360\nil;

use function Onslip360\dateTime;
use function Onslip360\isoDate;
use function Onslip360\query;

// Create an API instance
$rmd = new ResponseMetadata;

$api = (new API('https://test.onslip360.com/v1/', '<realm>', 'key:<username>+<keyname>@<realm>', '<key>'))
		->appName('My-Client/1.0')
		->onResponseMetadata($rmd);

// Get information about the authenticated user
$me = $api->getClientInfo();
printf("Me: %s\n", print_r($me, true));

// Display all product groups, sorted by name
print "All product groups:\n";
foreach ($api->listProductGroups(null, 'name') as $product) {
	printf("  %s, created on %s\n", $product->name, dateTime($product->created)->format('r'));
}

// Find all products -- even deleted products -- that cost more than 20 (kr) and has been modified since last month
print "Products costing more than 20 kr and recently updated:\n";
$last_month = (new DateTime("NOW"))->sub(new DateInterval("P30D"));
foreach ($api->listProducts(query('updated>"$" AND price>20', isoDate($last_month)), 'name', null, null, true) as $product) {
	printf("  %s: %f kr %s\n", $product->name, $product->price,
		   isset($product->deleted) ? sprintf("(deleted on %s)", dateTime($product->deleted)->format('r')) : '');
}

// Create, modify and then remove a new product
$prod = $api->addProduct((new Product(
	name:            'My API product',
	price:           19.50,
	description:     'A product created from PHP',
	htmlDescription: '<p>A bit <em>nicer</em> description. <img src="http://tiny.cc/jyvxtx" onload="javascript:alert(1337)">',
	productGroup:    1,
))->setExtended('_x-demo-custom', 'A custom field in the "demo" namespace'));

$prod_etag = $rmd->headers['etag'];

printf("Newly created product: %s", print_r($prod, true));

try {
	$prod = $api->ifMatch($prod_etag /* Avoid race conditions */)->updateProduct($prod->id, new Partial_Product(
		description: nil,
		price:       $prod->price * 1.10,
	));

	printf("Updated product: %s", print_r($prod, true));
}
catch (Exception $ex) {
	printf("Did not update product: " . $ex);
}

$api->removeProduct($prod->id); // Clean up
