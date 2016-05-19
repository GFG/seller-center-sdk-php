<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetBrands as Response;

/**
 * Class GetBrandsTest
 */
class GetBrandsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $expected
     *
     * @dataProvider toArrayDataProvider
     */
    public function testToArray($expected)
    {
        $request = new GetBrands();
        $this->assertEquals($expected, $request->toArray());
    }

    public function testGetResponseClassName()
    {
        $request = new GetBrands([10], 'hello you !');
        $this->assertEquals(Response::class, $request->getResponseClassName());
    }

    public function testGetMethod()
    {
        $this->assertEquals(Client::GET, (new GetBrands())->getMethod());
    }

    /**
     * @return array
     */
    public function toArrayDataProvider()
    {
        return [
            'single test' => [
                'expected' => [
                    'Version' => '1.0',
                    'Action' => 'GetBrands',
                    'Format' => 'JSON',
                ]
            ]
        ];
    }
}
