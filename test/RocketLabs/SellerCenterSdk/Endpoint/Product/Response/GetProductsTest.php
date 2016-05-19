<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;


use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\ProductCollection;

/**
 * Class GetProductsTest
 * @package RocketLabs\SellerCenterSdk\Endpoint\Product\Response
 */
class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    public function testGetProducts() {
        $res = new GetProducts(['Head' => [], 'Body' => []]);
        $this->assertInstanceOf(ProductCollection::class, $res->getProducts());
    }

    public function testWithData()
    {
        $res = new GetProducts(
            [
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
        );
    }

    public function testWithDataArray()
    {
        $res = new GetProducts(
            [
                'Head' => [],
                'Body' => [
                    'Products' => [
                        'Product' => [
                            [
                                'SellerSku' => 'Hello',
                                'Name' => 'World',
                                'Images' => [
                                    'Image' => []
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        );
    }
}
