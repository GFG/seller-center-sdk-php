<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Item;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$orderId = 1; // Please change the OrderId for Your system.

$response = Endpoints::order()->getOrderItems($orderId)->call($client);

printf("Items for the order:\n");

foreach ($response->getItems() as $item) {
    /** @var Item $item */
    printf("    #%6d : %s \n", $item->getOrderItemId(), $item->getName());
}
