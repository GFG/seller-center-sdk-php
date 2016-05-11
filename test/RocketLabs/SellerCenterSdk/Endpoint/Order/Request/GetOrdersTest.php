<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrders as GetOrdersResponse;

class GetOrdersTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMethod()
    {
        $this->assertEquals(Client::GET, $this->buildRequestObject([])->getMethod());
    }

    /**
     * @dataProvider providerToArray
     * @param array $arguments
     * @param array $expectedArray
     */
    public function testToArray(array $arguments, array $expectedArray)
    {
        $this->assertEquals($expectedArray, $this->buildRequestObject($arguments)->toArray());
    }

    public function testGetResponseClassName()
    {
        $this->assertEquals(GetOrdersResponse::class, (new GetOrders())->getResponseClassName());
    }

    /**
     * @return array
     */
    public function providerToArray()
    {
        return [
            [
                'arguments' => [
                    GetOrders::CREATED_AFTER_FIELD => new \DateTime('2016-01-01'),
                    GetOrders::CREATED_BEFORE_FIELD => new \DateTime('2016-01-02'),
                    GetOrders::UPDATED_AFTER_FIELD => new \DateTime('2016-02-01'),
                    GetOrders::UPDATED_BEFORE_FIELD => new \DateTime('2016-02-02'),
                    GetOrders::STATUS_FIELD => 'pending',
                    GetOrders::OFFSET_FIELD => 30,
                    GetOrders::LIMIT_FIELD => 15,
                    GetOrders::SORT_BY_FIELD => 'updated_at',
                    GetOrders::SORT_DIRECTION_FIELD => 'ASC'
                ],
                'expectedArray' => [
                    'Action' => 'GetOrders',
                    'Format' => 'JSON',
                    'Version' => '1.0',
                    'Status' => 'pending',
                    'Limit' => 15,
                    'Offset' => 30,
                    'CreatedAfter' => (new \DateTime('2016-01-01'))->format(\DateTime::ISO8601),
                    'CreatedBefore' => (new \DateTime('2016-01-02'))->format(\DateTime::ISO8601),
                    'UpdatedAfter' => (new \DateTime('2016-02-01'))->format(\DateTime::ISO8601),
                    'UpdatedBefore' => (new \DateTime('2016-02-02'))->format(\DateTime::ISO8601),
                    'SortBy' => 'updated_at',
                    'SortDirection' => 'ASC',
                ]
            ]
        ];
    }

    /**
     * @param array $arguments
     * @return GetOrders
     */
    protected function buildRequestObject(array $arguments)
    {
        return new GetOrders(
            isset($arguments[GetOrders::CREATED_AFTER_FIELD]) ? $arguments[GetOrders::CREATED_AFTER_FIELD] : null,
            isset($arguments[GetOrders::CREATED_BEFORE_FIELD]) ? $arguments[GetOrders::CREATED_BEFORE_FIELD] : null,
            isset($arguments[GetOrders::UPDATED_AFTER_FIELD]) ? $arguments[GetOrders::UPDATED_AFTER_FIELD] : null,
            isset($arguments[GetOrders::UPDATED_BEFORE_FIELD]) ? $arguments[GetOrders::UPDATED_BEFORE_FIELD] : null,
            isset($arguments[GetOrders::STATUS_FIELD]) ? $arguments[GetOrders::STATUS_FIELD] : null,
            isset($arguments[GetOrders::LIMIT_FIELD]) ? $arguments[GetOrders::LIMIT_FIELD] : null,
            isset($arguments[GetOrders::OFFSET_FIELD]) ? $arguments[GetOrders::OFFSET_FIELD] : null,
            isset($arguments[GetOrders::SORT_BY_FIELD]) ? $arguments[GetOrders::SORT_BY_FIELD] : null,
            isset($arguments[GetOrders::SORT_DIRECTION_FIELD]) ? $arguments[GetOrders::SORT_DIRECTION_FIELD] : null
        );
    }
}
