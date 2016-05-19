<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductUpdate
 * @method FeedIdResponse|ErrorResponse call(Client $client)
 */
class ProductUpdate extends GenericRequest
{
    const ACTION = 'ProductUpdate';

    /**
     * ProductCreate constructor.
     *
     * @param array $productUpdateData
     */
    public function __construct(array $productUpdateData)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            $productUpdateData
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
