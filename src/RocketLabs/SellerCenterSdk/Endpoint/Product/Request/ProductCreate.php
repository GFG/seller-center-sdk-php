<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;

/**
 * Class ProductCreate
 * @method GenericResponse|ErrorResponse call(Client $client)
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
}