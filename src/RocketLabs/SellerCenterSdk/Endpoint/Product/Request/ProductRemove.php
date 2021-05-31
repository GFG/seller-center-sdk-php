<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductRemove
 * @method FeedIdResponse|ErrorResponse call(Client $client)
 */
class ProductRemove extends GenericRequest
{
    const ACTION = 'ProductRemove';

    /**
     * ProductCreate constructor.
     *
     * @param array $productRemoveData
     */
    public function __construct(array $productRemoveData)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            $productRemoveData
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return FeedIdResponse::class;
    }
}