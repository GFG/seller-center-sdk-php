<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\SuccessResponseInterface;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$orderItemId = 1; // Please change the OrderItemId for Your system.
$reason = 'cancel';
$reasonDetail = 'Cancel';

$response = Endpoints::order()->setStatusToCanceled($orderItemId, $reason, $reasonDetail)
    ->call($client);

if ($response instanceof SuccessResponseInterface) {
    printf("The order item has been successfully canceled\n");
} else {
    printf("Unable to cancel the order item\n{$response->getMessage()}");
}
