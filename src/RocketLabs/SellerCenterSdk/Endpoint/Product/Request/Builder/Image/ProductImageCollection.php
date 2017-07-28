<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ImageCollectionAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductImage as ProductImageRequest;

/**
 * Class ProductImageCollection;
 */
class ProductImageCollection extends ImageCollectionAbstract
{
    /**
     * @return ProductImageRequest
     */
    public function build()
    {
        return new ProductImageRequest($this->toArray());
    }

    /**
     * @param string $sellerSku
     *
     * @return ProductImage
     */
    public function newProduct($SellerSku)
    {
        $productImageBuilder = new ProductImage($SellerSku);

        $this->products[] = $productImageBuilder;

        return $productImageBuilder;
    }
}
