<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     *
     * @dataProvider constructProvider
     */
    public function testConstruct(array $data)
    {
        $address = new Address($data);

        $this->assertEquals(
            $data,
            [
                Address::FIRST_NAME => $address->getFirstName(),
                Address::LAST_NAME => $address->getLastName(),
                Address::PHONE => $address->getPhone(),
                Address::PHONE2 => $address->getPhone2(),
                Address::ADDRESS => $address->getAddress(),
                Address::ADDRESS2 => $address->getAddress2(),
                Address::ADDRESS3 => $address->getAddress3(),
                Address::ADDRESS4 => $address->getAddress4(),
                Address::ADDRESS5 => $address->getAddress5(),
                Address::CITY => $address->getCity(),
                Address::WARD => $address->getWard(),
                Address::REGION => $address->getRegion(),
                Address::POST_CODE => $address->getPostCode(),
                Address::COUNTRY => $address->getCountry(),
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
            ]
        ];
    }
}
