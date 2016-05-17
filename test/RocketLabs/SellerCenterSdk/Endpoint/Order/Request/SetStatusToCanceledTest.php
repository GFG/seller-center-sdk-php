<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;

class SetStatusToCanceledTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $this->assertEquals(Client::POST, (new SetStatusToCanceled(10, 'reason', 'reason detail'))->getMethod());
    }

    /**
     * @param int $id
     * @param string $reason
     * @param string $reasonDetail
     * @param array $expectedArray
     *
     * @dataProvider providerToArray
     */
    public function testToArray($id, $reason, $reasonDetail, $expectedArray)
    {
        $this->assertEquals($expectedArray, (new SetStatusToCanceled($id, $reason, $reasonDetail))->toArray());
    }

    public function providerToArray()
    {
        return [
            [
                'id' => 10,
                'reason' => 'reason',
                'details' => 'reason details',
                'expected array' => [
                    'Action' => 'SetStatusToCanceled',
                    'Format' => 'JSON',
                    'Version' => '1.0',
                    'OrderItemId' => 10,
                    'Reason' => 'reason',
                    'ReasonDetail' => 'reason details'
                ]
            ]
        ];
    }
}
