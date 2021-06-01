<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedList;

/**
 * Class Feed
 */
class Feed
{
    /**
     * @return FeedList
     */
    public function feedList()
    {
        return new FeedList();
    }
    
    /**
     * @return FeedStatus
     */
    public function feedStatus()
    {
        return new FeedStatus();
    }
}
