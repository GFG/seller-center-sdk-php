<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\RequestBuilderInterface;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Image as ImageRequest;

class Image implements RequestBuilderInterface
{

    /** @var string[] */
    private $images = [];

    /** @var string */
    private $sellerSku;

    public function __construct($sellerSku)
    {
        $this->sellerSku = $sellerSku;
    }

    /**
     * @param string $imageUrl
     * @return $this
     */
    public function addImage($imageUrl)
    {
        $this->images[] = $imageUrl;
        return $this;
    }

    /**
     * @return ImageRequest
     */
    public function build()
    {
        return new ImageRequest($this->sellerSku, $this->images);
    }
}
