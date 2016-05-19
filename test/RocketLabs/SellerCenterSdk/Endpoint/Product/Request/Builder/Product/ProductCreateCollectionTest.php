<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductCreate as ProductCreateRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductCreateCollection as ProductCreateBuilder;

/**
 * Class ProductCreateCollectionTest
 */
class ProductCreateCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider buildProvider
     * @param array $products
     * @param ProductCreateRequest $expectedRequest
     */
    public function testBuild(array $products, ProductCreateRequest $expectedRequest)
    {
        $productCreateCollection = new ProductCreateBuilder();
        foreach ($products as $product) {
            $productCreateBuilder = $productCreateCollection->newProduct();
            foreach ($product as $property => $value) {
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
                        Product::SELLER_SKU => '41053821e4',
                        Product::NAME => 'New Product',
                        Product::BRAND => 'A Little 7',
                        Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                        Product::TAX_CLASS => 'default',
                        Product::VARIATION => 'XXL',
                        Product::PRICE => 40.00,
                        Product::SALE_PRICE => 33,
                        Product::SALE_START_DATE => $now,
                        Product::SALE_END_DATE => $now->modify('+5 day'),
                        Product::STATUS => 'active',
                        Product::PRIMARY_CATEGORY => 5588,
                        Product::PRODUCT_DATA => [
                            'DescriptionEn' => 'I am a description for the new product',
                            'NameEn' => 'I am a new product',
                            'PackageType' => 'Parcel'
                        ]

                    ],
                    [
                        Product::SELLER_SKU => '4105382122sse4',
                        Product::NAME => 'New Product Again',
                        Product::BRAND => 'A Little 7',
                        Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                        Product::TAX_CLASS => 'default',
                        Product::VARIATION => 'XXS',
                        Product::PRICE => 41.00,
                        Product::SALE_PRICE => 32,
                        Product::SALE_START_DATE => new \DateTime('now'),
                        Product::SALE_END_DATE => (new \DateTime('now'))->modify('+5 day'),
                        Product::STATUS => 'active',
                        Product::PRIMARY_CATEGORY => 5588,
                        Product::PRODUCT_DATA => [
                            'DescriptionEn' => 'I am a description for the new product again',
                            'NameEn' => 'I am a new product Again',
                            'PackageType' => 'Parcel'
                        ],
                    ],
                ],
                'request' => new ProductCreateRequest(
                    [
                        'Product' => [
                            [
                                Product::SELLER_SKU => '41053821e4',
                                Product::NAME => 'New Product',
                                Product::BRAND => 'A Little 7',
                                Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                                Product::TAX_CLASS => 'default',
                                Product::VARIATION => 'XXL',
                                Product::PRICE => 40.00,
                                Product::SALE_PRICE => 33,
                                Product::SALE_START_DATE => $now->format(\DateTime::ISO8601),
                                Product::SALE_END_DATE => $now->modify('+5 day')->format(\DateTime::ISO8601),
                                Product::STATUS => 'active',
                                Product::PRIMARY_CATEGORY => 5588,
                                Product::PRODUCT_DATA => [
                                    'DescriptionEn' => 'I am a description for the new product',
                                    'NameEn' => 'I am a new product',
                                    'PackageType' => 'Parcel'
                                ],
                                Product::PARENT_SKU => null,
                                Product::CATEGORIES => null,
                                Product::BROWSE_NODES => null,
                                Product::SHIPMENT_TYPE => null,
                                Product::PRODUCT_ID => null,
                                Product::CONDITION => null,
                                Product::QUANTITY => null
                            ],
                            [
                                Product::SELLER_SKU => '4105382122sse4',
                                Product::NAME => 'New Product Again',
                                Product::BRAND => 'A Little 7',
                                Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                                Product::TAX_CLASS => 'default',
                                Product::VARIATION => 'XXS',
                                Product::PRICE => 41.00,
                                Product::SALE_PRICE => 32,
                                Product::SALE_START_DATE => $now->format(\DateTime::ISO8601),
                                Product::SALE_END_DATE => $now->modify('+5 day')->format(\DateTime::ISO8601),
                                Product::STATUS => 'active',
                                Product::PRIMARY_CATEGORY => 5588,
                                Product::PRODUCT_DATA => [
                                    'DescriptionEn' => 'I am a description for the new product again',
                                    'NameEn' => 'I am a new product Again',
                                    'PackageType' => 'Parcel'
                                ],
                                Product::PARENT_SKU => null,
                                Product::CATEGORIES => null,
                                Product::BROWSE_NODES => null,
                                Product::SHIPMENT_TYPE => null,
                                Product::PRODUCT_ID => null,
                                Product::CONDITION => null,
                                Product::QUANTITY => null
                            ]
                        ]
                    ]
                ),
            ]
        ];
    }


}
