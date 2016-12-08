<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ImageAbstract as ImageAbstractBuilder;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductImage as ProductImageRequest;

/**
 * Class ProductImage
 */
class ProductImage extends ImageAbstractBuilder
{
    /**
     * @return ProductImageRequest
     */
    public function build()
    {
        return new ProductImageRequest($this->toArray());
    }
}
