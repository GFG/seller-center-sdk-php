<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Address;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Order;

class GetOrderTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructEmpty()
    {
        $response = new GetOrder(
            [
                'Head' => [],
                'Body' => []
            ]
        );
        $this->assertNull($response->getOrder());
    }

    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testConstruct(array $data)
    {
        $response = new GetOrder($data);
        $this->assertInstanceOf(Order::class, $response->getOrder());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data with 1 order' => [
                'data' => [
                    'Head' => [],
                    'Body' => [
                        GetOrders::ORDERS_KEY => [
                            GetOrders::ORDER_KEY => [
                                Order::ORDER_ID => 89,
                                Order::CUSTOMER_FIRST_NAME => 'John',
                                Order::CUSTOMER_LAST_NAME => 'Doe',
                                Order::ORDER_NUMBER => '123',
                                Order::PAYMENT_METHOD => 'Creditcard',
                                Order::REMARKS => 'ok',
                                Order::DELIVERY_INFO => 'deliver fast',
                                Order::PRICE => '208.59',
                                Order::GIFT_OPTION => 1,
                                Order::GIFT_MESSAGE => 'Have fun',
                                Order::VOUCHER_CODE => 88,
                                Order::CREATED_AT => '2015-08-01 17:55:05',
                                Order::UPDATED_AT => '2015-08-02 09:01:18',
                                Order::ADDRESS_BILLING => [
                                    Address::FIRST_NAME => 'Sheldon',
                                    Address::LAST_NAME => 'Cooper',
                                    Address::PHONE => '123456',
                                    Address::PHONE2 => '7890',
                                    Address::ADDRESS => 'Street 12',
                                    Address::ADDRESS2 => 'Street 34',
                                    Address::ADDRESS3 => 'Street 56',
                                    Address::ADDRESS4 => 'Street 78',
                                    Address::ADDRESS5 => 'Street 90',
                                    Address::CITY => 'Pasadena',
                                    Address::WARD => 'Center',
                                    Address::REGION => 'Los Angeles County',
                                    Address::POST_CODE => '7b8',
                                    Address::COUNTRY => 'California',
                                ],
                                Order::ADDRESS_SHIPPING => [
                                    Address::FIRST_NAME => 'Sheldon',
                                    Address::LAST_NAME => 'Cooper',
                                    Address::PHONE => '123456',
                                    Address::PHONE2 => '7890',
                                    Address::ADDRESS => 'Street 88',
                                    Address::ADDRESS2 => 'Street 34',
                                    Address::ADDRESS3 => 'Street 56',
                                    Address::ADDRESS4 => 'Street 78',
                                    Address::ADDRESS5 => 'Street 90',
                                    Address::CITY => 'Pasadena',
                                    Address::WARD => 'Home',
                                    Address::REGION => 'Los Angeles County',
                                    Address::POST_CODE => '7b8',
                                    Address::COUNTRY => 'California',
                                ],
                                Order::NATIONAL_REG_NUMBER => '12345678',
                                Order::ITEM_COUNT => 3,
                                Order::PROMISED_SHIPPING_TIME => '2015-08-12 10:01:18',
                                Order::EXTRA_ATTRIBUTES => '{foo: 1}',
                                Order::STATUSES => [
                                    'Status' => [
                                        'Shipped',
                                        'Delivered',
                                        'Canceled'
                                    ]
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
