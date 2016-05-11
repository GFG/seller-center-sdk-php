<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;

class SetStatusToPackedByMarketplaceTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $this->assertEquals(
            Client::POST,
            (new SetStatusToPackedByMarketplace([10, 11], 'dropship', 'DHL'))->getMethod()
        );
    }

    /**
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     * @param array $expectedArray
     *
     * @dataProvider providerToArray
     */
    public function testToArray(array $orderItemIds, $deliveryType, $shippingProvider, array $expectedArray)
    {
        $this->assertEquals(
            $expectedArray,
            (new SetStatusToPackedByMarketplace($orderItemIds, $deliveryType, $shippingProvider))->toArray()
        );
    }

    public function providerToArray()
    {
        return [
            [
                'ids' => [10, 11],
                'delivery' => 'dropship',
                'provider' => 'DHL',
                'expected array' => [
                    'Action' => 'SetStatusToPackedByMarketplace',
                    'Format' => 'JSON',
                    'Version' => '1.0',
                    'OrderItemIds' => '10,11',
                    'DeliveryType' => 'dropship',
                    'ShippingProvider' => 'DHL'
                ]
            ]
        ];
    }
}
