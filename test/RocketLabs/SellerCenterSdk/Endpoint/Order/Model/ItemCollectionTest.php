<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class ItemCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     * @param array $data
     * @param int $firstMemberId
     */
    public function testIterator(array $data, $firstMemberId)
    {
        $collection = $this->buildCollection($data);

        foreach ($collection as $orderItem) {
            $this->assertInstanceOf(Item::class, $orderItem);
        }

        $collection->rewind();
        $this->assertEquals($firstMemberId, $collection->current()->getOrderItemId());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data' => [
                'data' => [
                    new Item(
                        [
                            Item::ORDER_ITEM_ID => 54,
                            Item::SHOP_ID => '69',
                            Item::ORDER_ID => '21',
                            Item::NAME => 'Super Good',
                            Item::SKU => '123XB98',
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
                        ]
                    ),
                    new Item(
                        [
                            Item::ORDER_ITEM_ID => 55,
                            Item::SHOP_ID => '69',
                            Item::ORDER_ID => '21',
                            Item::NAME => 'Super Good',
                            Item::SKU => '123XB18',
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
                        ]
                    )
                ],
                'firstId' => 54
            ]
        ];
    }

    /**
     * @param array $data
     * @return ItemCollection
     */
    protected function buildCollection(array $data)
    {
        return new ItemCollection($data);
    }
}
