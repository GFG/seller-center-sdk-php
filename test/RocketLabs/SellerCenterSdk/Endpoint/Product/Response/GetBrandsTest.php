<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Brand;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\BrandCollection;

class GetBrandsTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructEmpty()
    {
        $response = new GetBrands(
            [
                'Head' => [],
                'Body' => []
            ]
        );
        $this->assertNull($response->getBrands());
    }

    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testConstruct(array $data)
    {
        $response = new GetBrands($data);
        $this->assertInstanceOf(BrandCollection::class, $response->getBrands());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data with 2+ brands' => [
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
        ];
    }
}
