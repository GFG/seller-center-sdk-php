<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductCreate as ProductCreateRequest;

/**
 * Class ProductCreateCollection
 */
class ProductCreateCollection extends RequestBuilderAbstract
{
    const AGGREGATOR_NAME = 'Product';

    /**
     * @var ProductCreate[]
     */
    protected $products;

    /**
     * @return ProductCreateRequest
     */
    public function build()
    {
        return new ProductCreateRequest($this->toArray());
    }

    /**
     * @return ProductCreate
     */
    public function newProduct()
    {
        $productCreateBuilder = new ProductCreate();

        $this->products[] = $productCreateBuilder;

        return $productCreateBuilder;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $products = [];

        /** @var $product ProductCreate */
        foreach ($this->products as $product) {
            $products[static::AGGREGATOR_NAME][] = $product->toArray();
        }

        return $products;
    }
}
