<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = $client->call(
    (new GenericRequest(
        Client::GET,
        'notExistingAction',
        GenericRequest::V2
    ))
);

if ($response instanceof ErrorResponse) {
    printf("Error (%d) %s\n", $response->getCode(), $response->getMessage());
}
