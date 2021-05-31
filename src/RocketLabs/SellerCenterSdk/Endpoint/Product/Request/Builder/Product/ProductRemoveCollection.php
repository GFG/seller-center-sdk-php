<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductCollectionAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductRemove as ProductRemoveRequest;

/**
 * Class ProductRemoveCollection
 */
class ProductRemoveCollection extends ProductCollectionAbstract
{
    /**
     * @return ProductRemoveRequest
     */
    public function build()
    {
        return new ProductRemoveRequest($this->toArray());
    }

    /**
     * @param string $sellerSku
     *
     * @return ProductRemove
     */
    public function removeProduct($sellerSku)
    {
        $productRemoveBuilder = new ProductRemove($sellerSku);

        $this->products[] = $productRemoveBuilder;

        return $productRemoveBuilder;
    }
}