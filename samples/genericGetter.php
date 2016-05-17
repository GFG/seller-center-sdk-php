<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\SuccessResponseInterface;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = $client->call(
    (new GenericRequest(
        Client::GET,
        'GetBrands',
        GenericRequest::V1
    ))
);

if ($response instanceof SuccessResponseInterface) {
    printf("% 10s %s\n", 'ID', 'BrandName');
    foreach ($response->getBody()['Brands']['Brand'] as $brand) {
        printf("% 10d %s\n", $brand['BrandId'], $brand['Name']);
    }
}
