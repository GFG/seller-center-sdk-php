<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductUpdate as ProductUpdateBuilder;

/**
 * Class ProductUpdateTest
 */
class ProductUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider constructorWithInvalidSellerSkuProvider
     * @param string $sellerSku
     */
    public function testConstructorWithInvalidSellerSku($sellerSku)
    {
        $this->setExpectedException(RequiredFieldValue::class);

        new ProductUpdateBuilder($sellerSku);
    }

    /**
     * @dataProvider buildProvider
     *
     * @param string $sellerSku
     * @param array $product
     * @param ProductUpdateRequest $expectedRequest
     */
    public function testBuild($sellerSku, array $product, ProductUpdateRequest $expectedRequest)
    {
        $builder = new ProductUpdateBuilder($sellerSku);
        foreach ($product as $property => $value) {
            call_user_func([$builder, 'set' . $property], $value);
        }

        $this->assertEquals($expectedRequest, $builder->build());
    }

    /**
     * @return array
     */
    public function constructorWithInvalidSellerSkuProvider()
    {
        return [
            [''],
            [null],
            [false],
            [0],
            [0.0],
            ['0']
        ];
    }

    /**
     * @return array
     */
    public function buildProvider()
    {

        $now = new \DateTimeImmutable('now');

        return [
            'update a product price' => [
                'sellerSku' => '41053821e4',
                'product' => [
                    Product::PRICE => 40.00,
                    Product::SALE_PRICE => 37,
                    Product::SALE_START_DATE => $now,
                    Product::SALE_END_DATE => $now->modify('+5 day')
                ],
                'request' => new ProductUpdateRequest(
                    [
                        Product::SELLER_SKU => '41053821e4',
                        Product::PRICE => 40.00,
                        Product::SALE_PRICE => 37,
                        Product::SALE_START_DATE => $now->format(\DateTime::ISO8601),
                        Product::SALE_END_DATE => $now->modify('+5 day')->format(\DateTime::ISO8601)
                    ]
                ),
            ]
        ];
    }

}
