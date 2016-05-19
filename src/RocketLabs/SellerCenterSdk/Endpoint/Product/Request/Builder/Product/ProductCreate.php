<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductAbstract as ProductAbstractBuilder;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductCreate as ProductCreateRequest;

/**
 * Class ProductCreate
 */
class ProductCreate extends ProductAbstractBuilder
{
    /**
     * @return ProductCreateRequest
     */
    public function build()
    {
        return new ProductCreateRequest($this->toArray());
    }
}
