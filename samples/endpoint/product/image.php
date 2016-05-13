<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$sellerSku = 'SKU0001';  // Please change the SellerSKU for Your system.

$sampleImg1 = 'http://hallsf.imperial.ac.uk/gabor/wp-content/uploads/2015/12/Brandenburg-Gate-West-Berlin.jpg';
$sampleImg2 = 'http://turpogoda.ru/photo/month_city_img/45_7_2.jpg';

$response = Endpoints::product()->image($sellerSku)
    ->addImage($sampleImg1)
    ->addImage($sampleImg2)
    ->build()
    ->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    printf("Feed has been created. Feed id = %s\n", $response->getFeedId());
}
