<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;

final class Product
{
    /**
     * @return GetBrands
     */
    public function getBrands()
    {
        return new GetBrands();
    }
}
