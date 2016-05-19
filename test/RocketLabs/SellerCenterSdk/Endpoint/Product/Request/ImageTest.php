<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ImageTest
 */
class ImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $sku
     * @param array $images
     * @param array $expected
     *
     * @dataProvider providerGetBodyData
     */
    public function testGetBodyData($sku, array $images, $expected)
    {
        $request = new Image($sku, $images);
        $this->assertEquals($expected, $request->getBodyData());
    }

    /**
     * @return array
     */
    public function providerGetBodyData()
    {
        return [
            'few images' => [
                'sku' => '123a',
                'images' => [
                    'http://images.com/imgs/img10121201.jpg',
                    'http://images.com/imgs/img10121212.jpg',
                ],
                'expected' => [
                    'ProductImage' => [
                        'SellerSku' => '123a',
                        'Images' => [
                            'Image' => [
                                'http://images.com/imgs/img10121201.jpg',
                                'http://images.com/imgs/img10121212.jpg',
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function testGetResponseClassName()
    {
        $request = new Image('sku', ['http://images.com/img.jpg']);
        $this->assertEquals(FeedIdResponse::class, $request->getResponseClassName());
    }

    public function testGetMethod()
    {
        $request = new Image('sku', ['http://images.com/img.jpg']);
        $this->assertEquals(Client::POST, $request->getMethod());
    }

    /**
     * @dataProvider providerConstructor
     * @param array $images
     * @param $exception
     */
    public function testConstructor(array $images, $exception)
    {
        if ($exception) {
            $this->setExpectedException($exception);
        }
        new Image('sku', $images);
    }

    /**
     * @return array
     */
    public function providerConstructor()
    {
        return [
            'valid request with two image' => [
                'images' => [
                    'http://valid.url/img.png',
                    'http://valid.url/img.jpg'
                ],
                'exception' => null,
            ],
            'valid request with no images' => [
                'images' => [],
                'exception' => InvalidFieldValue::class,
            ],
            'request with invalid urls' => [
                'images' => [
                    'ololo12',
                    'http://valid.url/img.png'
                ],
                'exception' => InvalidFieldValue::class,
            ]
        ];
    }
}
