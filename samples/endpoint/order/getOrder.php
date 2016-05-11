<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrder;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$orderId = 1; // Please change the OrderId for Your system.

$response = Endpoints::order()->getOrder($orderId)->call($client);

if ($response instanceof GetOrder) {
    $order = $response->getOrder();
    printf("ORDER #%d (%s)\n\n", $order->getOrderId(), $order->getOrderNumber());

    printf("ITEMS: %d\nITEM STATUSES:\n", $order->getItemsCount());

    foreach ($order->getStatuses() as $status) {
        printf("\t- %s\n", $status);
    }

    $address = $order->getAddressBilling();

    printf(
        "\nBILLING ADDRESS:\n%s %s %s %s %s %s %s %s %s\n",
        $address->getPostCode(),
        $address->getCountry(),
        $address->getRegion(),
        $address->getCity(),
        $address->getAddress(),
        $address->getAddress2(),
        $address->getAddress3(),
        $address->getAddress4(),
        $address->getAddress5()
    );
}
