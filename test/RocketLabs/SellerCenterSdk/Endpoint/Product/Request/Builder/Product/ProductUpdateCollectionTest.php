<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductUpdateCollection as ProductUpdateBuilder;

/**
 * Class ProductUpdateCollectionTest
 */
class ProductUpdateCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider buildProvider
     *
     * @param array $products
     * @param ProductUpdateRequest $expectedRequest
     */
    public function testBuild(array $products, ProductUpdateRequest $expectedRequest)
    {
        $productCreateCollection = new ProductUpdateBuilder();
        foreach ($products as $product) {
            $productCreateBuilder = $productCreateCollection->updateProduct($product['sellerSku']);
            foreach ($product['values'] as $property => $value) {
                call_user_func([$productCreateBuilder, 'set' . $property], $value);
            }
        }

        $this->assertEquals($expectedRequest, $productCreateCollection->build());
    }

    /**
     * @return array
     */
    public function buildProvider()
    {

        $now = new \DateTimeImmutable('now');

        return [
            'with two products' => [
                'product' => [
                    [
                        'sellerSku' => '41053821e4',
                        'values' => [
                            Product::PRICE => 40.00,
                            Product::SALE_PRICE => 37,
                            Product::SALE_START_DATE => $now,
                            Product::SALE_END_DATE => $now->modify('+5 day')
                        ],
                    ],
                    [
                        'sellerSku' => '4105382122sse4',
                        'values' => [
                            Product::NAME => 'Product Name Again Changed'
                        ],
                    ]
                ],
                'request' => new ProductUpdateRequest(
                    [
                        'Product' => [
                            [
                                Product::SELLER_SKU => '41053821e4',
                                Product::PRICE => 40.00,
                                Product::SALE_PRICE => 37,
                                Product::SALE_START_DATE => $now->format(\DateTime::ISO8601),
                                Product::SALE_END_DATE => $now->modify('+5 day')->format(\DateTime::ISO8601)
                            ],
                            [
                                Product::SELLER_SKU => '4105382122sse4',
                                Product::NAME => 'Product Name Again Changed'
                            ]
                        ]
                    ]
                ),
            ]
        ];
    }


}
