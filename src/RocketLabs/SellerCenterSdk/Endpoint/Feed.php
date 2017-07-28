<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedList;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Request\FeedStatus;

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
    public function feedStatus($feedId)
    {
        return new FeedStatus($feedId);
    }
}
