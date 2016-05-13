<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedList;

class Feed
{
    /**
     * @return FeedList
     */
    public function feedList()
    {
        return new FeedList();
    }
}
