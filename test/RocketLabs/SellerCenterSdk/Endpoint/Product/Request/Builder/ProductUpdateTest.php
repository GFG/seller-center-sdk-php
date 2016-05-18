<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductUpdate as ProductUpdateBuilder;

/**
 * Class ProductUpdateTest
 */
class ProductUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider testConstructorWithInvalidSellerSkuProvider
     * @param string $sellerSku
     */
    public function testConstructorWithInvalidSellerSku($sellerSku)
    {
        $this->setExpectedException(RequiredFieldValue::class);

        new ProductUpdateBuilder($sellerSku);
    }

    /**
     * @dataProvider testBuildProvider
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
    public function testConstructorWithInvalidSellerSkuProvider()
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
    public function testBuildProvider()
    {

        $now = new \DateTimeImmutable('now');

        return [
            'update a product price' => [
                'sellerSku' => '41053821e4',
                'product' => [
                    Product::PRICE => 40.00,
                    Product::SALE_PRICE => 37,
                    Product::SALE_START_DATE => new \DateTime('now'),
                    Product::SALE_END_DATE => (new \DateTime('now'))->modify('+5 day')
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
