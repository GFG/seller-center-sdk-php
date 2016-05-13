<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::product()
    ->productCreate()
    ->setName("New Product")
    ->setSellerSku("4105382173aaee4")
    ->setStatus("active")
    ->setVariation("XXL")
    ->setPrimaryCategory("4")
    ->setCategories("1,2,3")
    ->setDescription("<![CDATA[This is a <b>bold</b> product.]]")
    ->setBrand("ASM")
    ->setPrice(40.00)
    ->setSalePrice(32.5)
    ->setSaleStartDate(new DateTime('now'))
    ->setSaleEndDate((new DateTime('now'))->modify('+5 day'))
    ->setTaxClass("default")
    ->build()
    ->call($client);

if ($response instanceof ErrorResponse) {
    /** @var ErrorResponse $response */
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    printf("Successful created!\n");
}
