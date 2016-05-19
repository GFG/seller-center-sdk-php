<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$primaryCategory = 1; // Please change primary category id

$response = Endpoints::product()->getCategoryAttributes($primaryCategory)->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    /** @var Attribute $attribute */
    foreach ($response->getAttributes() as $attribute) {
        printf(
            "Attribute Name: %s\n",
            $attribute->getName()
        );
    }
}
