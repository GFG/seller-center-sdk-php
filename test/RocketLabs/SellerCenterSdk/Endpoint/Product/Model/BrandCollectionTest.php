<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class BrandCollectionTest
 */
class BrandCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     * @param array $data
     * @param int $firstMemberId
     */
    public function testIterator(array $data, $firstMemberId)
    {
        $collection = new BrandCollection($data);

        foreach ($collection as $brand) {
            $this->assertInstanceOf(Brand::class, $brand);
        }

        $collection->rewind();
        $this->assertEquals($firstMemberId, $collection->current()->getId());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data' => [
                'data' => [
                    new Brand(
                        [
                            Brand::ID_KEY => 82,
                            Brand::NAME_KEY => 'LaLa',
                            Brand::GLOBAL_IDENTIFIER_KEY => '123G1',
                        ]
                    ),
                    new Brand(
                        [
                            Brand::ID_KEY => 85,
                            Brand::NAME_KEY => 'LaLa2',
                            Brand::GLOBAL_IDENTIFIER_KEY => '123G12',
                        ]
                    ),
                ],
                'firstId' => 82
            ]
        ];
    }
}
