<?php

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Configuration;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Endpoints;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\Feed;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../config/config.php';

/**
 * @param string $label
 * @param int|string|float $value
 */
function printOut($label, $value)
{
    printf("% 20s %s \n", $label, $value);
}

$client = Client::create(new Configuration(SC_API_URL, SC_API_USER, SC_API_KEY));

$response = Endpoints::feed()->feedList()->call($client);

if ($response instanceof ErrorResponse) {
    printf("ERROR !\n");
    printf("%s\n", $response->getMessage());
} else {

    /** @var Feed $feed */
    foreach ($response->getFeeds() as $feed) {
        printOut('Feed', $feed->getFeed());
        printOut('Status', $feed->getStatus());
        printOut('Action', $feed->getAction());
        printOut('Creation Data', $feed->getCreationDate()->format('Y-m-d H:i:s'));
        printOut('Updated Date', $feed->getUpdatedDate()->format('Y-m-d H:i:s'));
        printOut('Source', $feed->getSource());
        printOut('Total Records', $feed->getTotalRecords());
        printOut('Processed Records', $feed->getProcessedRecords());
        printOut('Failed Records', $feed->getFailedRecords());

        $failureReports = $feed->getFailureReports();
        if (!is_null($failureReports)) {
            printOut('Failure Reports', 'MimeType: ' . $failureReports->getMimeType());
            printOut('File', $failureReports->getFile());
        } else {
            printOut('Failure Reports', '');
        }

        echo "\n";
    }
}
