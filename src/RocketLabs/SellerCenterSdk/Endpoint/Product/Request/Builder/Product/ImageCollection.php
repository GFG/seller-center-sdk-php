<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Image as ImageRequest;

/**
 * Class ImageCollection
 */
class ImageCollection  extends RequestBuilderAbstract
{
    const AGGREGATOR_NAME = 'ProductImage';

    protected $images;

    /**
     * @return ImageRequest
     */
    public function build()
    {
        return new ImageRequest($this->toArray());
    }

    /**
     * @param string $sellerSku
     *
     * @return Image
     */
    public function image($sellerSku)
    {
        $imageBuilder = new Image($sellerSku);

        $this->images[] = $imageBuilder;

        return $imageBuilder;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $images = [];

        /** @var ImageAbstract $image */
        foreach ($this->images as $image) {
            $images[static::AGGREGATOR_NAME][] = $image->toArray();
        }

        return $images;
    }
}
