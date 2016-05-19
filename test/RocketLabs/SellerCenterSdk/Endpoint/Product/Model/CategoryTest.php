<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class CategoryTest
 */
class CategoryTest extends \PHPUnit_Framework_TestCase
{

    public function testSingleData()
    {
        new Category(
            [
                'Children' => [
                    'Category' => [
                        'Name' => 'Hello world !'
                    ]
                ]
            ]
        );
    }

    public function testListData()
    {
        new Category(
            [
                'Children' => [
                    'Category' => [
                        [
                            'Name' => 'Hello world !'
                        ],
                        [
                            'Name' => 'Hello world !'
                        ]
                    ]
                ]
            ]
        );
    }

}
