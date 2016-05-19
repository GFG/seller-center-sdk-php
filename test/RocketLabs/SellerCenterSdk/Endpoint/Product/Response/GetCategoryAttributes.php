<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\AttributeCollection;

/**
 * Class GetCategoryAttributesTest
 */
class GetCategoryAttributesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider constructProvider
     * @param int $count
     * @param array $data
     * @param AttributeCollection $expected
     */
    public function testConstruct($count, array $data, AttributeCollection $expected)
    {
        $response = new GetCategoryAttributes($data);

        $this->assertInstanceOf(AttributeCollection::class, $response->getAttributes());
        $this->assertSame($count, $response->getAttributes()->count());
        $this->assertEquals($expected, $response->getAttributes());
    }

    /**
     * @return array
     */
    public function constructProvider()
    {
        return [
            'valid data with 1 attribute' => [
                'count' => 1,
                'data' => [
                    'Head' => [],
                    'Body' => [
                        GetCategoryAttributes::ATTRIBUTE_KEY => [
                            [
                                Attribute::NAME => 'First Category',
                                Attribute::LABEL => 'First Category Label',
                                Attribute::IS_MANDATORY => true,
                                Attribute::DESCRIPTION => 'First Category Description',
                                Attribute::ATTRIBUTE_TYPE => 'option',
                                Attribute::EXAMPLE_VALUE => 'First Category Example',
                                Attribute::OPTIONS => [
                                    Attribute::OPTION_AGGREGATOR_NAME => [
                                        [
                                            Attribute\Option::NAME => 'Option 1',
                                            Attribute\Option::GLOBAL_IDENTIFIER => 'identifier1',
                                            Attribute\Option::IS_DEFAULT => true
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'expected' => new AttributeCollection(
                    [
                        new Attribute(
                            [
                                Attribute::NAME => 'First Category',
                                Attribute::LABEL => 'First Category Label',
                                Attribute::IS_MANDATORY => true,
                                Attribute::DESCRIPTION => 'First Category Description',
                                Attribute::ATTRIBUTE_TYPE => 'option',
                                Attribute::EXAMPLE_VALUE => 'First Category Example',
                                Attribute::OPTIONS => [
                                    Attribute::OPTION_AGGREGATOR_NAME => [
                                        [
                                            Attribute\Option::NAME => 'Option 1',
                                            Attribute\Option::GLOBAL_IDENTIFIER => 'identifier1',
                                            Attribute\Option::IS_DEFAULT => true,
                                        ]
                                    ]
                                ]
                            ]
                        )
                    ]
                )
            ]
        ];
    }

}
