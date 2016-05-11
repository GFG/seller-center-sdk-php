<?php
namespace RocketLabs\SellerCenterSdk\Core\Request\OutputFormatAdapter;

/**
 * Class XmlOutputFormatAdapterTest
 */
final class XmlOutputFormatAdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider convertToOutputFormatDataProvider
     *
     * @param array $data
     * @param string $expectedResult
     */
    public function convertToOutputFormat(array $data, $expectedResult)
    {
        /** @var XmlOutputFormatAdapter $mock */
        $mock = new XmlOutputFormatAdapter();

        $result = $mock->convertToOutputFormat($data);

        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function convertToOutputFormatDataProvider()
    {
        return [
            'multiple complex options' => [
                '$data' => [
                    'Attribute' => [
                        'Label' => 'Battery Type',
                        'Name' => 'type_of_battery',
                        'isMandatory' => [],
                        'Description' => 'Type of battery use',
                        'AttributeType' => 'option',
                        'ExampleValue' => [],
                        'Options' => [
                            'Option' => [
                                [
                                    'Name' => 'AA Alkaline Batteries',
                                    'isDefault' => 0,
                                ],
                                [
                                    'Name' => 'Li-ions Rechargeable Battery',
                                    'isDefault' => 0,
                                ],
                                [
                                    'Name' => 'Build in battery',
                                    'isDefault' => 0,
                                ],
                                [
                                    'Name' => 'No battery',
                                    'isDefault' => 0,
                                ],
                            ],
                        ],
                    ],
                ],
                '$expectedResult' => "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<Request><Attribute><Label>Battery Type</Label><Name>type_of_battery</Name><isMandatory/><Description>Type of battery use</Description><AttributeType>option</AttributeType><ExampleValue/><Options><Option><Name>AA Alkaline Batteries</Name><isDefault>0</isDefault></Option><Option><Name>Li-ions Rechargeable Battery</Name><isDefault>0</isDefault></Option><Option><Name>Build in battery</Name><isDefault>0</isDefault></Option><Option><Name>No battery</Name><isDefault>0</isDefault></Option></Options></Attribute></Request>\n",
            ],
            'multiple simple options' => [
                '$data' => [
                    'ProductImage' => [
                        'SellerSku' => 'SKU',
                        'Images' => [
                            'Image' => [
                                'url_1?value=1&value=2',
                                'url_2',
                                'url_3',
                            ],
                        ],
                    ],
                ],
                '$expectedResult' => "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<Request><ProductImage><SellerSku>SKU</SellerSku><Images><Image>url_1?value=1&amp;value=2</Image><Image>url_2</Image><Image>url_3</Image></Images></ProductImage></Request>\n",
            ],
            'real request body example' => [
                '$data' => [
                    'Product' => [
                        [
                            'SellerSku' => '4105382173aaee4',
                            'Price' => 12,

                        ],
                        [
                            'SellerSku' => '4928a374c28ff1',
                            'Quantity' => 4
                        ]
                    ],
                ],
                '$expectedResult' => "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<Request><Product><SellerSku>4105382173aaee4</SellerSku><Price>12</Price></Product><Product><SellerSku>4928a374c28ff1</SellerSku><Quantity>4</Quantity></Product></Request>\n",
            ]
        ];
    }
}
