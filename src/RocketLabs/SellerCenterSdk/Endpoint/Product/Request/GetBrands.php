<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetBrands as GetBrandsResponse;

/**
 * Class GetBrands
 * @method GetBrandsResponse|ErrorResponse call(Client $client)
 */
class GetBrands extends GenericRequest
{
    const ACTION = 'GetBrands';

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
        return GetBrandsResponse::class;
    }
}
