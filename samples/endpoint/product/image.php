<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$sellerSku = 'SKU0001';  // Please change the SellerSKU for Your system.

$sampleImg1 = 'http://lorempixel.com/image_output/city-q-c-640-480-8.jpg';
$sampleImg2 = 'http://lorempixel.com/image_output/city-q-c-640-480-3.jpg';

$response = Endpoints::product()->image($sellerSku)
    ->addImage($sampleImg1)
    ->addImage($sampleImg2)
    ->build()
    ->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    printf("The feed `%s` has been created.\n", $response->getFeedId());
}
