<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::product()
    ->getCategoryAttributes()
    ->setPrimaryCategory(1)
    ->build()
    ->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    $attributes = $response->getAttributes();

    /** @var Attribute $attribute */
    foreach ($attributes as $attribute) {
        printf(
            "Attribute: %s\n",
            $attribute->getName()
        );
    }
}
