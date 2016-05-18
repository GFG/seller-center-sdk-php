<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetCategoryAttributes as GetCategoryAttributesResponse;

/**
 * Class GetCategoryAttributes
 * @method GetCategoryAttributesResponse|ErrorResponse call(Client $client)
 */
class GetCategoryAttributes extends GenericRequest
{
    const ACTION = 'GetCategoryAttributes';

    /**
     * GetCategoryAttributes constructor.
     *
     * @param array $getCategoryAttributesData
     */
    public function __construct(array $getCategoryAttributesData)
    {
        parent::__construct(
            Client::GET,
            static::ACTION,
            static::V1,
            $getCategoryAttributesData
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GetCategoryAttributesResponse::class;
    }
}
