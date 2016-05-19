<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Brand;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\BrandCollection;

/**
 * Class GetBrandsTest
 */
class GetBrandsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider constructProvider
     * @param int $count
     * @param array $data
     */
    public function testConstruct($count, array $data)
    {
        $response = new GetBrands($data);

        $this->assertInstanceOf(BrandCollection::class, $response->getBrands());
        $this->assertSame($count, $response->getBrands()->count());
    }

    /**
     * @return array
     */
    public function constructProvider()
    {
        return [
            'valid data with 2+ brands' => [
                'count' => 2,
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'Brands' => [
                            'Brand' => [
                                [
                                    Brand::ID_KEY => 82,
                                    Brand::NAME_KEY => 'LaLa',
                                    Brand::GLOBAL_IDENTIFIER_KEY => '123G1',
                                ],
                                [
                                    Brand::ID_KEY => 81,
                                    Brand::NAME_KEY => 'LaLa1',
                                    Brand::GLOBAL_IDENTIFIER_KEY => '123G11',
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'valid data with 1 brand' => [
                'count' => 1,
                'data' => [
                    'Head' => [],
                    'Body' => [
                        'Brands' => [
                            'Brand' => [
                                Brand::ID_KEY => 82,
                                Brand::NAME_KEY => 'LaLa',
                                Brand::GLOBAL_IDENTIFIER_KEY => '123G1',
                            ]
                        ]
                    ]
                ]
            ],
            'empty brand' => [
                'count' => 0,
                'data' => [
                    'Head' => [],
                    'Body' => []
                ]
            ],
        ];
    }
}
