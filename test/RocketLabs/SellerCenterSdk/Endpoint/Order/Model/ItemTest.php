<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     * @param array $expected
     *
     * @dataProvider constructProvider
     */
    public function testConstruct(array $data, array $expected)
    {
        $item = new Item($data);

        $this->assertEquals(
            $expected,
            [
                Item::ORDER_ITEM_ID => $item->getOrderItemId(),
                Item::SHOP_ID => $item->getShopId(),
                Item::ORDER_ID => $item->getOrderId(),
                Item::NAME => $item->getName(),
                Item::SKU => $item->getSku(),
                Item::SHOP_SKU => $item->getShopSku(),
                Item::SHIPPING_TYPE => $item->getShippingType(),
                Item::ITEM_PRICE => $item->getItemPrice(),
                Item::PAID_PRICE => $item->getPaidPrice(),
                Item::WALLET_CREDITS => $item->getWalletCredits(),
                Item::TAX_AMOUNT => $item->getTaxAmount(),
                Item::SHIPPING_AMOUNT => $item->getShippingAmount(),
                Item::VOUCHER_AMOUNT => $item->getVoucherAmount(),
                Item::VOUCHER_CODE => $item->getVoucherCode(),
                Item::STATUS => $item->getStatus(),
                Item::SHIPMENT_PROVIDER => $item->getShipmentProvider(),
                Item::IS_DIGITAL => $item->isDigital(),
                Item::DIGITAL_DELIVERY_INFO => $item->getDigitalDeliveryInfo(),
                Item::TRACKING_CODE => $item->getTrackingCode(),
                Item::REASON => $item->getReason(),
                Item::REASON_DETAIL => $item->getReasonDetail(),
                Item::PURCHASE_ORDER_ID => $item->getPurchaseOrderId(),
                Item::PURCHASE_ORDER_NUMBER => $item->getPurchaseOrderNumber(),
                Item::PACKAGE_ID => $item->getPackageId(),
                Item::PROMISED_SHIPPING_TIMES => $item->getPromisedShippingTimes(),
                Item::SHIPPING_PROVIDER_TYPE => $item->getShippingProviderType(),
                Item::EXTRA_ATTRIBUTES => $item->getExtraAttributes(),
                Item::CREATED_AT => $item->getCreatedAt(),
                Item::UPDATED_AT => $item->getUpdatedAt(),
            ]
        );
    }

    /**
     * @return array
     */
    public function constructProvider()
    {
        return [
            [
                'data' => [
                    Item::ORDER_ITEM_ID => '42',
                    Item::SHOP_ID => '69',
                    Item::ORDER_ID => '21',
                    Item::NAME => 'Super Good',
                    Item::SKU => '123XB8',
                    Item::SHOP_SKU => '789Y-478',
                    Item::SHIPPING_TYPE => 'Dropshipping',
                    Item::ITEM_PRICE => '19.90',
                    Item::PAID_PRICE => '19.90',
                    Item::WALLET_CREDITS => 5,
                    Item::TAX_AMOUNT => '5.47',
                    Item::SHIPPING_AMOUNT => '1.00',
                    Item::VOUCHER_AMOUNT => '2.00',
                    Item::VOUCHER_CODE => 'xyz',
                    Item::STATUS => 'Shipped',
                    Item::SHIPMENT_PROVIDER => 'Express',
                    Item::IS_DIGITAL => 0,
                    Item::DIGITAL_DELIVERY_INFO => 'In progress',
                    Item::TRACKING_CODE => 'ABC12',
                    Item::REASON => 'ohhh',
                    Item::REASON_DETAIL => 'ohh details',
                    Item::PURCHASE_ORDER_ID => 88,
                    Item::PURCHASE_ORDER_NUMBER => 21,
                    Item::PACKAGE_ID => 89,
                    Item::PROMISED_SHIPPING_TIMES => '2012-08-09',
                    Item::SHIPPING_PROVIDER_TYPE => 'normal',
                    Item::EXTRA_ATTRIBUTES => '{foo: 1}',
                    Item::CREATED_AT => '2012-08-05 23:30:59',
                    Item::UPDATED_AT => '2012-08-08 12:00:31',
                ],
                'expected' => [
                    Item::ORDER_ITEM_ID => 42,
                    Item::SHOP_ID => 69,
                    Item::ORDER_ID => 21,
                    Item::NAME => 'Super Good',
                    Item::SKU => '123XB8',
                    Item::SHOP_SKU => '789Y-478',
                    Item::SHIPPING_TYPE => 'Dropshipping',
                    Item::ITEM_PRICE => '19.90',
                    Item::PAID_PRICE => '19.90',
                    Item::WALLET_CREDITS => 5,
                    Item::TAX_AMOUNT => '5.47',
                    Item::SHIPPING_AMOUNT => '1.00',
                    Item::VOUCHER_AMOUNT => '2.00',
                    Item::VOUCHER_CODE => 'xyz',
                    Item::STATUS => 'Shipped',
                    Item::SHIPMENT_PROVIDER => 'Express',
                    Item::IS_DIGITAL => false,
                    Item::DIGITAL_DELIVERY_INFO => 'In progress',
                    Item::TRACKING_CODE => 'ABC12',
                    Item::REASON => 'ohhh',
                    Item::REASON_DETAIL => 'ohh details',
                    Item::PURCHASE_ORDER_ID => 88,
                    Item::PURCHASE_ORDER_NUMBER => 21,
                    Item::PACKAGE_ID => 89,
                    Item::PROMISED_SHIPPING_TIMES => new \DateTimeImmutable('2012-08-09'),
                    Item::SHIPPING_PROVIDER_TYPE => 'normal',
                    Item::EXTRA_ATTRIBUTES => '{foo: 1}',
                    Item::CREATED_AT => new \DateTimeImmutable('2012-08-05 23:30:59'),
                    Item::UPDATED_AT => new \DateTimeImmutable('2012-08-08 12:00:31'),
                ]
            ]
        ];
    }
}
