<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetDocument as Response;

class GetDocumentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $expected
     * @param array $data
     *
     * @dataProvider toArrayDataProvider
     */
    public function testToArray($expected, $data)
    {
        $request = new GetDocument($data['OrderItemIds'], $data['DocumentType']);
        $this->assertEquals($expected, $request->toArray());
    }

    public function testGetResponseClassName()
    {
        $request = new GetDocument([10], 'hello you !');
        $this->assertEquals(Response::class, $request->getResponseClassName());
    }

    public function testGetMethod()
    {
        $this->assertEquals(Client::GET, (new GetDocument([10], 'hello you !'))->getMethod());
    }

    /**
     * @return array
     */
    public function toArrayDataProvider()
    {
        return [
            'single test' => [
                'expected' => [
                    'OrderItemIds' => '[1,2,3]',
                    'Version' => '1.0',
                    'Action' => 'GetDocument',
                    'Format' => 'JSON',
                    'DocumentType' => 'hello you !',
                ],
                'data' => [
                    'OrderItemIds' => [1,2,3],
                    'Version' => '1.0',
                    'Action' => 'GetDocument',
                    'Format' => 'JSON',
                    'DocumentType' => 'hello you !',
                ]
            ]
        ];
    }
}
