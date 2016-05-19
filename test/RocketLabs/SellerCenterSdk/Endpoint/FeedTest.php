<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedList;

/**
 * Class FeedTest
 */
class FeedTest extends \PHPUnit_Framework_TestCase
{

    public function testFeedList()
    {
        $feed = new Feed();
        $this->assertInstanceOf(FeedList::class, $feed->feedList());
    }

}
