<?php

namespace RocketLabs\SellerCenterSdk\Core\Response;

class AbstractResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param array $responseData
     * @param array $expectedHead
     * @param array $expectedBody
     * @dataProvider providerConstructor
     */
    public function testConstructor(array $responseData, array $expectedHead, array $expectedBody)
    {
        /** @var AbstractResponse $response */
        $response = $this->getMock(AbstractResponse::class, null, [$responseData]);

        $this->assertEquals($expectedHead, $response->getHead());
        $this->assertEquals($expectedBody, $response->getBody());
    }

    /**
     * @return array
     */
    public function providerConstructor()
    {
        return [
            'complete response' => [
                'response' => [
                    'Head' => [
                        'Action' => 'DoSomething',
                        'RequestId' => '000-000-r0003-frrw43'
                    ],
                    'Body' => [
                        'SomeData' => 'value'
                    ]
                ],
                'head' => [
                    'Action' => 'DoSomething',
                    'RequestId' => '000-000-r0003-frrw43'
                ],
                'body' => ['SomeData' => 'value']
            ],
            'response without body' => [
                'response' => [
                    'Head' => [
                        'Action' => 'DoSomething',
                        'RequestId' => '000-000-r0003-frrw43'
                    ]
                ],
                'head' => [
                    'Action' => 'DoSomething',
                    'RequestId' => '000-000-r0003-frrw43'
                ],
                'body' => []
            ],
            'response without head' => [
                'response' => [
                    'Body' => [
                        'SomeData' => 'value'
                    ]
                ],
                'head' => [],
                'body' => ['SomeData' => 'value']
            ],
            'empty response' => [
                'response' => [],
                'head' => [],
                'body' => []
            ],
        ];
    }

}
