<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Response\FeedList as FeedListResponse;

/**
 * Class FeedList
 * @method FeedListResponse|ErrorResponse call(Client $client)
 */
class FeedList extends GenericRequest
{
    const ACTION = 'FeedList';

    /**
     * GetBrands constructor.
     */
    public function __construct()
    {
        parent::__construct(
            Client::GET,
            static::ACTION,
            static::V1
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return FeedListResponse::class;
    }
}
