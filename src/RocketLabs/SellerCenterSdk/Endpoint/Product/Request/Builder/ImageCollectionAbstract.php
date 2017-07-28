<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;

/**
 * Class ImageCollectionAbstract
 */
abstract class ImageCollectionAbstract extends RequestBuilderAbstract
{

    const AGGREGATOR_NAME = 'ProductImage';

    /**
     * @var ImageAbstract
     */
    protected $products;

    /**
     * @return array
     */
    public function toArray()
    {
        $products = [];

        /** @var ImageAbstract $product */
        foreach ($this->products as $product) {
            $products[static::AGGREGATOR_NAME][] = $product->toArray();
        }

        return $products;
    }
}
