<?php

namespace RocketLabs\SellerCenterSdk\Core\Response;

class ErrorResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param array $responseData
     * @param string $expectedMessage
     * @param array $expectedDetails
     * @dataProvider providerConstructor
     */
    public function testConstructor(array $responseData, $expectedMessage, array $expectedDetails)
    {
        $response = new ErrorResponse($responseData);

        $this->assertEquals($expectedMessage, $response->getMessage());
        $this->assertEquals($expectedDetails, $response->getDetails());
    }

    /**
     * @return array
     */
    public function providerConstructor()
    {
        return [
            'with body and message' => [
                'data' => [
                    'Head' => ['ErrorMessage' => 'Error 01'],
                    'Body' => ['PostedData' => ['SomeData' => 1]]
                ],
                'message' => 'Error 01',
                'details' => ['PostedData' => ['SomeData' => 1]],
            ],
            'with message' => [
                'data' => [
                    'Head' => ['ErrorMessage' => 'Error 01']
                ],
                'message' => 'Error 01',
                'details' => [],
            ],
            'with body' => [
                'data' => [
                    'Head' => [],
                    'Body' => ['PostedData' => ['SomeData' => 1]]
                ],
                'message' => '',
                'details' => ['PostedData' => ['SomeData' => 1]],
            ],
            'empty' => [
                'data' => [],
                'message' => '',
                'details' => [],
            ]
        ];
    }
}
