<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductUpdateTest
 */
class ProductUpdateTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $request = new ProductUpdate([]);

        $this->assertEquals(Client::POST, $request->getMethod());
    }

    public function testGetResponseClassName()
    {
        $this->assertEquals(FeedIdResponse::class, (new ProductUpdate([]))->getResponseClassName());
    }

    /**
     * @dataProvider testConstructorProvider
     * @param array $products
     */
    public function testConstructor(array $products)
    {
        new ProductUpdate($products);
    }

    /**
     * @return array
     */
    public function testConstructorProvider()
    {
        return [
            'valid request with two products' => [
                'products' => [
                    [
                        Product::SELLER_SKU => '41053821e4',
                        Product::PRICE => 40.00,
                        Product::SALE_PRICE => 37,
                        Product::SALE_START_DATE => new \DateTime('now'),
                        Product::SALE_END_DATE => (new \DateTime('now'))->modify('+5 day')
                    ],
                    [
                        Product::SELLER_SKU => '4105382122sse4',
                        Product::NAME => 'Product Name Again Changed'
                    ],
                ]
            ]
        ];
    }
}
