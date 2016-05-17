<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductCreate
 * @method FeedIdResponse|ErrorResponse call(Client $client)
 */
class ProductCreate extends GenericRequest
{
    const ACTION = 'ProductCreate';

    /**
     * ProductCreate constructor.
     *
     * @param array $productCreateData
     */
    public function __construct(array $productCreateData)
    {

        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            $productCreateData
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
