<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     * @param array $expected
     *
     * @dataProvider constructProvider
     */
    public function testConstruct(array $data, array $expected)
    {
        $order = new Order($data);

        $this->assertEquals(
            $expected,
            [
                Order::ORDER_ID => $order->getOrderId(),
                Order::CUSTOMER_FIRST_NAME => $order->getCustomerFirstName(),
                Order::CUSTOMER_LAST_NAME => $order->getCustomerLastName(),
                Order::ORDER_NUMBER => $order->getOrderNumber(),
                Order::PAYMENT_METHOD => $order->getPaymentMethod(),
                Order::REMARKS => $order->getRemarks(),
                Order::DELIVERY_INFO => $order->getDeliveryInfo(),
                Order::PRICE => $order->getPrice(),
                Order::GIFT_OPTION => $order->isGiftOption(),
                Order::GIFT_MESSAGE => $order->getGiftMessage(),
                Order::VOUCHER_CODE => $order->getVoucherCode(),
                Order::CREATED_AT => $order->getCreatedAt(),
                Order::UPDATED_AT => $order->getUpdatedAt(),
                Order::ADDRESS_BILLING => $order->getAddressBilling(),
                Order::ADDRESS_SHIPPING => $order->getAddressShipping(),
                Order::NATIONAL_REG_NUMBER => $order->getNationalRegistrationNumber(),
                Order::ITEM_COUNT => $order->getItemsCount(),
                Order::PROMISED_SHIPPING_TIME => $order->getPromisedShippingTime(),
                Order::EXTRA_ATTRIBUTES => $order->getExtraAttributes(),
                Order::STATUSES => $order->getStatuses(),
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
                ],
                'expected' => [
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
                    Order::CREATED_AT => new \DateTimeImmutable('2015-08-01 17:55:05'),
                    Order::UPDATED_AT => new \DateTimeImmutable('2015-08-02 09:01:18'),
                    Order::ADDRESS_BILLING =>  new Address(
                        [
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
                        ]
                    ),
                    Order::ADDRESS_SHIPPING => new Address(
                        [
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
                        ]
                    ),
                    Order::NATIONAL_REG_NUMBER => '12345678',
                    Order::ITEM_COUNT => 3,
                    Order::PROMISED_SHIPPING_TIME => new \DateTimeImmutable('2015-08-12 10:01:18'),
                    Order::EXTRA_ATTRIBUTES => '{foo: 1}',
                    Order::STATUSES => new StatusCollection(
                        [
                            'Status' => [
                                'Shipped',
                                'Delivered',
                                'Canceled'
                            ]
                        ]
                    ),
                ]
            ]
        ];
    }
}
