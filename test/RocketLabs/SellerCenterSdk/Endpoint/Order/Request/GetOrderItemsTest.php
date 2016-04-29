<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrderItems as Response;

class GetOrderItemsTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $this->assertEquals(Client::GET, (new GetOrderItems(10))->getMethod());
    }

    /**
     * @param array $expected
     * @param array $data
     *
     * @dataProvider toArrayDataProvider
     */
    public function testToArray($expected, $data)
    {
        $request = new GetOrderItems($data['OrderId']);
        $this->assertEquals($expected, $request->toArray());
    }

    public function testGetResponseClassName()
    {
        $request = new GetOrderItems(10);
        $this->assertEquals(Response::class, $request->getResponseClassName());
    }

    public function toArrayDataProvider()
    {
        return [
            'single test' => [
                'expected' => [
                    'OrderId' => '4',
                    'Version' => '1.0',
                    'Action' => 'GetOrderItems',
                    'Format' => 'JSON',
                ],
                'data' => [
                    'OrderId' => 4
                ]
            ]
        ];
    }
}
