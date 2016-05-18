<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductCreateTest
 */
class ProductCreateTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $request = new ProductCreate([]);

        $this->assertEquals(Client::POST, $request->getMethod());
    }

    public function testGetResponseClassName()
    {
        $this->assertEquals(FeedIdResponse::class, (new ProductCreate([]))->getResponseClassName());
    }

    /**
     * @dataProvider testConstructorProvider
     * @param array $products
     */
    public function testConstructor(array $products)
    {
        new ProductCreate($products);
    }

    /**
     * @return array
     */
    public function testConstructorProvider()
    {
        $now = new \DateTimeImmutable('now');

        return [
            'valid request with two products' => [
                'products' => [
                    [
                        Product::SELLER_SKU => '41053821e4',
                        Product::NAME => 'New Product',
                        Product::BRAND => 'A Little 7',
                        Product::DESCRIPTION => '<![CDATA[This is a <b>bold</b> product.]]',
                        Product::TAX_CLASS => 'default',
                        Product::VARIATION => 'XXL',
                        Product::PRICE => 40.00,
                        Product::SALE_PRICE => 33,
                        Product::SALE_START_DATE => $now->format('Y-m-d'),
                        Product::SALE_END_DATE => $now->modify('+5 day')->format('Y-m-d'),
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
                        Product::SALE_START_DATE => $now->format('Y-m-d'),
                        Product::SALE_END_DATE => $now->modify('+5 day')->format('Y-m-d'),
                        Product::STATUS => 'active',
                        Product::PRIMARY_CATEGORY => 5588,
                        Product::PRODUCT_DATA => [
                            'DescriptionEn' => 'I am a description for the new product again',
                            'NameEn' => 'I am a new product Again',
                            'PackageType' => 'Parcel'
                        ],
                    ],
                ]
            ]
        ];
    }
}
