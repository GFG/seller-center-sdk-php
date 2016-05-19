<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\ItemCollection;

/**
 * Class GetOrderItemsTest
 */
class GetOrderItemsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructEmpty()
    {
        $response = new GetOrderItems(
            [
                'Head' => [],
                'Body' => []
            ]
        );

        $this->assertTrue($response->getItems()->isEmpty());
    }

    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testConstruct(array $data)
    {
        $response = new GetOrderItems($data);
        $this->assertInstanceOf(ItemCollection::class, $response->getItems());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data with 2+ items' => [
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'OrderItems' => [
                            'OrderItem' => [
                                [
                                    'OrderItemId' => '1',
                                    'ShopId' => '1',
                                    'OrderId' => '1',
                                    'Name' => 'Checkmate Contrasted Two Pocket Short Sleeve Check Shirt',
                                    'Sku' => '32132132121321321321',
                                    'ShopSku' => 'CH650FA84EFZANMY-113840',
                                    'ShippingType' => 'value',
                                    'ItemPrice' => '69.00',
                                    'PaidPrice' => '69.00',
                                    'WalletCredits' => '0.00',
                                    'TaxAmount' => '0.00',
                                    'ShippingAmount' => '12.50',
                                    'VoucherAmount' => '0',
                                    'VoucherCode' => 'value',
                                    'Status' => 'value',
                                    'ShipmentProvider' => 'value',
                                    'IsDigital' => '0',
                                    'DigitalDeliveryInfo' => 'value',
                                    'TrackingCode' => '7489',
                                    'Reason' => 'value',
                                    'ReasonDetail' => 'value',
                                    'PurchaseOrderId' => '72587',
                                    'PurchaseOrderNumber' => 'MPDS-D1405061201',
                                    'PackageId' => 'value',
                                    'PromisedShippingTimes' => '2015-05-26 10:29:03',
                                    'ShippingProviderType' => 'value',
                                    'ExtraAttributes' => '{color:"red", isGift:"true"}',
                                    'CreatedAt' => '2015-05-26 10:21:13',
                                    'UpdatedAt' => '2015-05-26 11:55:53',
                                ],
                                [
                                    'OrderItemId' => '2',
                                    'ShopId' => '1',
                                    'OrderId' => '1',
                                    'Name' => 'Checkmate Contrasted Two Pocket Short Sleeve Check Shirt',
                                    'Sku' => '32132132321321421321',
                                    'ShopSku' => 'CH650FA84EFZANMY-113240',
                                    'ShippingType' => 'value',
                                    'ItemPrice' => '69.00',
                                    'PaidPrice' => '69.00',
                                    'WalletCredits' => '0.00',
                                    'TaxAmount' => '0.00',
                                    'ShippingAmount' => '12.50',
                                    'VoucherAmount' => '0',
                                    'VoucherCode' => 'value',
                                    'Status' => 'value',
                                    'ShipmentProvider' => 'value',
                                    'IsDigital' => '0',
                                    'DigitalDeliveryInfo' => 'value',
                                    'TrackingCode' => '7489',
                                    'Reason' => 'value',
                                    'ReasonDetail' => 'value',
                                    'PurchaseOrderId' => '72587',
                                    'PurchaseOrderNumber' => 'MPDS-D1405061201',
                                    'PackageId' => 'value',
                                    'PromisedShippingTimes' => '2015-05-26 10:29:03',
                                    'ShippingProviderType' => 'value',
                                    'ExtraAttributes' => '{color:"red", isGift:"true"}',
                                    'CreatedAt' => '2015-05-26 10:21:13',
                                    'UpdatedAt' => '2015-05-26 11:53:53',
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'valid data with 1 item' => [
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'OrderItems' => [
                            'OrderItem' => [
                                'OrderItemId' => '1',
                                'ShopId' => '1',
                                'OrderId' => '1',
                                'Name' => 'Checkmate Contrasted Two Pocket Short Sleeve Check Shirt',
                                'Sku' => '32132132121321321321',
                                'ShopSku' => 'CH650FA84EFZANMY-113840',
                                'ShippingType' => 'value',
                                'ItemPrice' => '69.00',
                                'PaidPrice' => '69.00',
                                'WalletCredits' => '0.00',
                                'TaxAmount' => '0.00',
                                'ShippingAmount' => '12.50',
                                'VoucherAmount' => '0',
                                'VoucherCode' => 'value',
                                'Status' => 'value',
                                'ShipmentProvider' => 'value',
                                'IsDigital' => '0',
                                'DigitalDeliveryInfo' => 'value',
                                'TrackingCode' => '7489',
                                'Reason' => 'value',
                                'ReasonDetail' => 'value',
                                'PurchaseOrderId' => '72587',
                                'PurchaseOrderNumber' => 'MPDS-D1405061201',
                                'PackageId' => 'value',
                                'PromisedShippingTimes' => '2015-05-26 10:29:03',
                                'ShippingProviderType' => 'value',
                                'ExtraAttributes' => '{color:"red", isGift:"true"}',
                                'CreatedAt' => '2015-05-26 10:21:13',
                                'UpdatedAt' => '2015-05-26 11:55:53'
                            ]
                        ]
                    ]
                ]
            ],
        ];
    }
}
