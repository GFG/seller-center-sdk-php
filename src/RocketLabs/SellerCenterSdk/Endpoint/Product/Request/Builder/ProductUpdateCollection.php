<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;

/**
 * Class ProductUpdateCollection
 */
class ProductUpdateCollection extends RequestBuilderAbstract
{
    const AGGREGATOR_NAME = 'Product';

    /**
     * @var ProductUpdate
     */
    protected $products;

    /**
     * @return ProductUpdateRequest
     */
    public function build()
    {
        return new ProductUpdateRequest($this->toArray());
    }

    /**
     * @param string $sellerSku
     *
     * @return ProductUpdate
     */
    public function updateProduct($sellerSku)
    {
        $productUpdateBuilder = new ProductUpdate($sellerSku);

        $this->products[] = $productUpdateBuilder;

        return $productUpdateBuilder;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $products = [];

        /** @var $product ProductUpdate */
        foreach ($this->products as $product) {
            $products[static::AGGREGATOR_NAME][] = $product->toArray();
        }

        return $products;
    }
}
