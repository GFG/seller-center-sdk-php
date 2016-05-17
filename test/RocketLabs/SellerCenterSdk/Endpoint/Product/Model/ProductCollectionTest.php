<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class ProductCollectionTest
 */
class ProductCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testClass()
    {
        $this->assertEquals(Product::class, ProductCollection::ELEMENT_TYPE);
    }

    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testConstructor(array $data)
    {
        $collection = new ProductCollection($data);

        $this->assertEquals($data, $collection->toArray());
    }

    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testIterator(array $data)
    {
        $firstSellerSku = '41053821e4';

        $collection = new ProductCollection($data);

        $collection->rewind();

        $this->assertEquals($firstSellerSku, $collection->current()->getSellerSku());
    }

    /**
     * @return array
     */
    public function provider()
    {

        $now = new \DateTimeImmutable('now');

        return [
            'valid data' => [
                'data' => [
                    new Product(
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
                            ],
                        ]
                    ),
                    new Product(
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
                        ]
                    ),
                ]
            ]
        ];
    }
}
