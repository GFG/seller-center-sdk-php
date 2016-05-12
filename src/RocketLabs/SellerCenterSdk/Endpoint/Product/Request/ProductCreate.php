<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\ProductCreate as ProductCreateResponse;

/**
 * Class ProductCreate
 * @method ProductCreateResponse|ErrorResponse call(Client $client)
 */
class ProductCreate extends GenericRequest
{
    const ACTION = 'ProductCreate';

    /**
     * ProductCreate constructor.
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
        return ProductCreateResponse::class;
    }
}