<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Request;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Response\FeedList as FeedListResponse;

class FeedListTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $req = new FeedList();
        $this->assertEquals(FeedListResponse::class, $req->getResponseClassName());
    }

}
