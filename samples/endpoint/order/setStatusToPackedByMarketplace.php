<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\SuccessResponseInterface;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$orderItemIds = [1, 2]; // Please change the set of Order Item IDs for Your system.
$deliveryType = 'dropship';
$shipmentProvider = 'CJGLS';

$response = Endpoints::order()
    ->setStatusToPackedByMarketplace($orderItemIds, $deliveryType, $shipmentProvider)
    ->call($client);

if ($response instanceof SuccessResponseInterface) {
    printf("Statuses of order items have been changed to \"Packed By Marketplace\"\n");
} else {
    printf("Unable to change statuses of the order items\n");
}