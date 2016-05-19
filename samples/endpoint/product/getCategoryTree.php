<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Category;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetCategoryTree;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::product()->getCategoryTree()->call($client);

/**
 * Recursive print
 *
 * @param Category $category
 * @param int $depth
 */
function printOut($category, $depth)
{
    // This condition will avoid to have big tree printed out
    if ($depth > 5) {
        return;
    }

    printf(str_repeat('    ', $depth) . $category->getName() . "\n");

    foreach ($category->getChildren() as $child) {
        printOut($child, $depth + 1);
    }
}

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    /** @var GetCategoryTree $response */
    printf("SUCCESS !!!\n");
    foreach ($response->getCategories() as $cat) {
        printOut($cat, 0);
    };
}
