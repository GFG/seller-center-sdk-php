<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductImage
 * @method FeedIdResponse|ErrorResponse call(Client $client)
 */
class ProductImage extends GenericRequest
{
    const ACTION = 'Image';

    /**
     * ProductImage constructor.
     *
     * @param array $productImageData
     */
    public function __construct(array $productImageData)
    {
       
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            $productImageData
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
