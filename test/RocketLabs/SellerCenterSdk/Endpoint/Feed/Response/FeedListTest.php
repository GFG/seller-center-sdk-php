<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

class FeedListTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $var = new FeedList(
            [
                'Head' => [],
                'Body' => []
            ]
        );

        $var->getFeeds();
    }

}

