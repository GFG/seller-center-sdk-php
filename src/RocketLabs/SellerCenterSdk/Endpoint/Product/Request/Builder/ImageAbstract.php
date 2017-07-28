<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;

/**
 * Class ProductAbstract
 */
abstract class ImageAbstract extends RequestBuilderAbstract
{
    const IMAGES_KEY = 'Images';
    const IMAGE_KEY = 'Image';
    const SELLER_SKU_KEY = 'SellerSku';
    /**
     * @var string[]
     */
    private $images = [];

    /**
     * @var string
     */
    private $sellerSku;

    /**
     * Image constructor.
     * @param string $sellerSku
     */
    public function __construct($sellerSku)
    {
        $this->sellerSku = $sellerSku;
    }
    
     /**
     * @param string $imageUrl
     * @return static
     */
    public function addImage($imageUrl)
    {
        $this->images[] = $imageUrl;
        return $this;
    }
   
  
    /**
     * @return array
     */
    public function toArray()
    {
        if (empty($this->images)) {
            throw new InvalidFieldValue('[]', 'You have to add at least one image');
        }

        foreach ($this->images as $imageUrl) {
            if (filter_var($imageUrl, FILTER_VALIDATE_URL) === false) {
                throw new InvalidFieldValue($imageUrl, 'The value have to be a valid url.');
            }
        }
        
        $product=array(static::SELLER_SKU_KEY => $this->sellerSku,
                    static::IMAGES_KEY => [
                        static::IMAGE_KEY => $this->images
                    ]);
        return $product;
    }
}
