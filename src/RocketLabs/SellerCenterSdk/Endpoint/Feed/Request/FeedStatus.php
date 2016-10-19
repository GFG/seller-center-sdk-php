<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Response\FeedStatus as FeedStatusResponse;

/**
 * Class FeedStatus
 * @method FeedStatusResponse|ErrorResponse call(Client $client)
 */
class FeedStatus extends GenericRequest
{
    const ACTION = 'FeedStatus';
    const FEED_ID = 'FeedID';

    /**
     * FeedStatus constructor.
     */
    public function __construct($feedId)
    {
        parent::__construct(
            Client::GET,
            static::ACTION,
            static::V1,
            [
                static::FEED_ID => $feedId
            ]
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return FeedStatusResponse::class;
    }
}
