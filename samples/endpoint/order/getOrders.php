<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::order()->getOrders()
    ->setCreatedAfter(new DateTime('2016-04-01 00:00:00'))
    ->setLimit(10)
    ->build()
    ->call($client);

/**
 * @var $order \RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Order
 */
foreach ($response->getOrders() as $order) {
    printf(
        "ORDER % 8d   %s   %6.2f   %s %s\n",
        $order->getOrderId(),
        $order->getCreatedAt()->format('Y-m-d H:i:s'),
        $order->getPrice(),
        $order->getCustomerFirstName(),
        $order->getCustomerLastName()
    );
}
