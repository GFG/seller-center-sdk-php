<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetProducts;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductCreate as ProductCreateBuilder;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;

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
     * @return ProductCreateBuilder
     */
    public function productCreate()
    {
        return new ProductCreateBuilder();
    }

    /**
     * @return GetProducts
     */
    public function getProducts()
    {
        return new GetProducts();
    }
}
