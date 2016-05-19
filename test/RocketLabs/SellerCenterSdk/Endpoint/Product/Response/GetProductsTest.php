<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\ProductCollection;

/**
 * Class GetProductsTest
 */
class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider constructProvider
     *
     * @param int $count
     * @param array $data
     */
    public function testConstruct($count, array $data)
    {
        $response = new GetProducts($data);

        $this->assertInstanceOf(ProductCollection::class, $response->getProducts());
        $this->assertSame($count, $response->getProducts()->count());
    }

    /**
     * @return array
     */
    public function constructProvider()
    {
        return [
            'valid data with 2+ products' => [
                'count' => 2,
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'Products' => [
                            'Product' => [
                                [
                                    'SellerSku' => 'sellerSku1',
                                    'Name' => 'Product 1',
                                    'Images' => [
                                        'Image' => []
                                    ]
                                ],
                                [
                                    'SellerSku' => 'sellerSku2',
                                    'Name' => 'Product 2',
                                    'Images' => [
                                        'Image' => []
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'valid data with 1 product' => [
                'count' => 1,
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'Products' => [
                            'Product' => [
                                'SellerSku' => 'Hello',
                                'Name' => 'World',
                                'Images' => [
                                    'Image' => []
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'without products' => [
                'count' => 0,
                'data' => [
                    'Head' => [],
                    'Body' => []
                ]
            ],
        ];
    }
}
