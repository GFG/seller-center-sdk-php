<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetProducts;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = \RocketLabs\SellerCenterSdk\Endpoint\Endpoints::product()
    ->getProducts()
    ->setLimit(3)
    ->build()->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    /** @var GetProducts $response */
    /** @var Product $product */
    foreach ($response->getProducts() as $product) {
        printf(
            "\n%s:\n|   sku: %s\n|   price: %s\n",
            $product->getName(),
            $product->getSellerSku(),
            $product->getPrice()
        );
    }
}
