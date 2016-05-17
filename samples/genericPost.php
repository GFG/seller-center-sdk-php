<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Core\Response\SuccessResponseInterface;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config/config.php';


$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$brandsResponse = $client->call(
    (new GenericRequest(
        Client::GET,
        'GetBrands',
        GenericRequest::V1
    ))
);

$brands = $brandsResponse->getBody()['Brands']['Brand'];
shuffle($brands);
$brand = array_shift($brands);

$categoriesResponse = $client->call(
    (new GenericRequest(
        Client::GET,
        'GetCategoryTree',
        GenericRequest::V1
    ))
);
$rootCategory = $categoriesResponse->getBody()['Categories']['Category'];

$additional = [];
foreach ($rootCategory['Children']['Category'] as $category) {
    $additional[] = $category['CategoryId'];
}
$additional = implode(',', $additional);

$response = $client->call(
    (new GenericRequest(
        Client::POST,
        'ProductCreate',
        GenericRequest::V1,
        [],
        [
            'Product' => [
                'Brand' => $brand['Name'],
                'Description' => 'test product description',
                'Name' => 'Test product',
                'Price' => 123,
                'PrimaryCategory' => $rootCategory['CategoryId'],
                'Categories' => $additional,
                'SellerSku' => uniqid('TPR_'),
                'TaxClass' => 'default'
            ]
        ]
    ))
);

if ($response instanceof SuccessResponseInterface) {
    printf("Feed has been created. Feed id = %s\n", $response->getHead()['RequestId']);
} else {
    /** @var $response ErrorResponse */
    printf("Error %s\n", $response->getMessage());
}
