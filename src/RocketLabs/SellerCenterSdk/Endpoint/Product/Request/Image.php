<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class Image
 * @method FeedIdResponse|ErrorResponse call(Client $client)
 */
class Image extends GenericRequest
{
    const ACTION = 'Image';

    const WRAPPER = 'ProductImage';
    const SELLER_SKU_KEY = 'SellerSku';
    const IMAGES_KEY = 'Images';
    const IMAGE_KEY = 'Image';

    /**
     * Image constructor.
     * @param string $sellerSku
     * @param array $imageUrls
     */
    public function __construct($images)
    {
        $output = [static::WRAPPER => []];

        foreach ($images['ProductImage'] as $image) {
            $output = [
                static::WRAPPER => [
                    static::SELLER_SKU_KEY => $image['SellerSku'],
                    static::IMAGES_KEY => [
                        static::IMAGE_KEY => $image['Images']
                    ],
                ]
            ];
        }

        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            $output
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return FeedIdResponse::class;
    }
}
