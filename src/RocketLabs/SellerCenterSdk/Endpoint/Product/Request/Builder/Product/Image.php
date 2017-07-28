<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Image as ImageRequest;
use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;

/**
 * Class Image
 */
class Image extends RequestBuilderAbstract
{
    /**
     * @var string
     */
    protected $sellerSku;

    /**
     * @var array
     */
    protected $images;

    /**
     * Image constructor.
     *
     * @param string $sellerSku
     */
    public function __construct($sellerSku)
    {
        if (empty($sellerSku)) {
            throw new RequiredFieldValue(Product::SELLER_SKU);
        }

        $this->sellerSku = $sellerSku;
    }

    /**
     * @param array $productData
     * @return static
     */
    public function setImages(array $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return ImageRequest
     */
    public function build()
    {
        return new ImageRequest($this->toArray());
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->convertToArray($this);
    }

}
