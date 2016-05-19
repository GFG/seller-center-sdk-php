<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class BrandTest
 */
class BrandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     *
     * @dataProvider constructProvider
     */
    public function testConstruct(array $data)
    {
        $brand = new Brand($data);

        $this->assertEquals(
            $data,
            [
                Brand::ID_KEY => $brand->getId(),
                Brand::NAME_KEY => $brand->getName(),
                Brand::GLOBAL_IDENTIFIER_KEY => $brand->getGlobalIdentifier(),
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
                    Brand::ID_KEY => 82,
                    Brand::NAME_KEY => 'LaLa',
                    Brand::GLOBAL_IDENTIFIER_KEY => '123G1',
                ]
            ]
        ];
    }
}
