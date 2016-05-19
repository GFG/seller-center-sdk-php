<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Brand;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::product()->getBrands()->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    $brands = $response->getBrands();

    printf("% 10s % 16s %s\n", 'BrandId', 'GlobalIdentifier', 'BrandName');
    /** @var Brand $brand */
    foreach ($brands as $brand) {
        printf(
            "% 10d % 16s %s\n",
            $brand->getId(),
            $brand->getGlobalIdentifier(),
            $brand->getName()
        );
    }
}
