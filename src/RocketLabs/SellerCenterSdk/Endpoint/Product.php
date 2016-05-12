<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductCreate;

/**
 * Class Product
 */
final class Product
{
    /**
     * @return GetBrands
     */
    public function getBrands()
    {
        return new GetBrands();
    }

    /**
     * @return ProductCreate
     */
    public function getProductCreate()
    {
        return new ProductCreate();
    }
}
