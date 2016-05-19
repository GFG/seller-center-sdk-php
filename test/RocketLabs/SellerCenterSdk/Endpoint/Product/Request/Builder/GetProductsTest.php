<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldEnumValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetProducts as GetProductsRequest;

/**
 * Class GetProductsTest
 */
class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider correctSetupProvider
     * @param array $data
     * @param array $expected
     */
    public function testCorrectSetup(array $data, array $expected)
    {
        $builder = new GetProducts();
        $getProductsRequest = $builder->setFilter($data['filter'])
            ->setGlobalIdentifier($data['globalIdentifier'])
            ->setSearch($data['search'])
            ->build();

        $this->assertInstanceOf(GetProductsRequest::class, $getProductsRequest);

        $request = $getProductsRequest->toArray();

        foreach ($expected as $item => $value) {
            $this->assertEquals($value, $request[$item]);
        }
    }

    public function testIncorrectSetup()
    {

        $this->setExpectedException(InvalidFieldEnumValue::class);

        (new GetProducts)->setFilter('nope');
    }

    /**
     * @return array
     */
    public function correctSetupProvider()
    {
        return [
            'valid request of GetProducts' => [
                'filters' => [
                    'filter' => 'all',
                    'globalIdentifier' => 1,
                    'search' => 'dummy'
                ],
                'expected' => [
                    'Filter' => 'all',
                    'GlobalIdentifier' => 1,
                    'Search' => 'dummy'
                ]
            ]
        ];
    }
}
