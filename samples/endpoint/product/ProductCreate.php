<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::product()->getProductCreate()->call($client);

if ($response instanceof ErrorResponse) {
    /** @var ErrorResponse $response */
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    printf("Product created: %s\n", json_encode($response->getProduct()));
}
