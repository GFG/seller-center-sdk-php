<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class CategoryTest
 */
class CategoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider testConstructorProvider
     *
     * @param array $category
     * @param array $expected
     */
    public function testConstructor(array $category, array $expected)
    {
        $category = new Category($category);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertInstanceOf(CategoryCollection::class, $category->getChildren());

        $this->assertEquals($expected['category']['name'], $category->getName());

        foreach ($expected['category']['children'] as $position => $child) {
            $this->assertInstanceOf(Category::class, $category->getChildren()->offsetGet($position));
            $this->assertEquals($child['name'], $category->getChildren()->offsetGet($position)->getName());
        }
    }

    /**
     * @return array
     */
    public function testConstructorProvider()
    {
        return [
            'category with children' => [
                'category' => [
                    Category::NAME => 'First Category',
                    Category::CATEGORY_ID => 1,
                    Category::GLOBAL_IDENTIFIER => 2,
                    Category::CHILDREN => [
                        Category::CATEGORY => [
                            [
                                'Name' => 'Child 1',
                            ],
                            [
                                'Name' => 'Child 2'
                            ]
                        ]
                    ]
                ],
                'expected' => [
                    'category' => [
                        'name' => 'First Category',
                        'children' => [
                            [
                                'name' => 'Child 1',
                            ],
                            [
                                'name' => 'Child 2'
                            ]
                        ]
                    ]
                ]
            ],
            'category without children' => [
                'category' => [
                    Category::NAME => 'First Category',
                    Category::CATEGORY_ID => 2,
                    Category::GLOBAL_IDENTIFIER => 3,
                    Category::CHILDREN => []
                ],
                'expected' => [
                    'category' => [
                        'name' => 'First Category',
                        'children' => []
                    ]
                ]
            ]
        ];
    }

}
