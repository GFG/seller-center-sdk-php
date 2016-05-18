<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;


use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetCategoryTree as GetCategoryTreeResponse;

class GetCategoryTree extends GenericRequest
{

    const ACTION = 'GetCategoryTree';

    public function __construct()
    {
        parent::__construct(
            Client::GET,
            self::ACTION,
            self::V1
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GetCategoryTreeResponse::class;
    }

}
