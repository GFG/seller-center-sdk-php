<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldValue;
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

    public function __construct($sellerSku, array $imageUrls)
    {
        foreach ($imageUrls as $imageUrl) {
            if (filter_var($imageUrl, FILTER_VALIDATE_URL) === false) {
                throw new InvalidFieldValue($imageUrl, 'The value have to be a valid url.');
            }
        }

        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [],
            [
                static::WRAPPER => [
                    static::SELLER_SKU_KEY => $sellerSku,
                    static::IMAGES_KEY => [
                        static::IMAGE_KEY => $imageUrls
                    ],
                ]
            ]
        );
    }

    public function getResponseClassName()
    {
        return FeedIdResponse::class;
    }
}
