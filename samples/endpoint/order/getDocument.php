<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$orderItemIds = [1, 2]; // Please change the set of Order Item IDs for Your system.
$documentType = 'invoice';

$response = Endpoints::order()->getDocument($orderItemIds, $documentType)->call($client);

if ($response instanceof ErrorResponse) {
    /** @var ErrorResponse $response */
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {
    $doc = $response->getDocument();
    printf("Document type : %s\n", $doc->getType());
    printf("Document mime type : %s\n", $doc->getMimeType());
}
