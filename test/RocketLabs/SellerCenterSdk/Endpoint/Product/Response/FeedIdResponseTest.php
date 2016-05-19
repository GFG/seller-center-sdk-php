<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

/**
 * Class FeedIdResponseTest
 */
class FeedIdResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider providerGetFeedId
     * @param $responseData
     * @param $expectedFeedId
     */
    public function testGetFeedId($responseData, $expectedFeedId)
    {
        $response = new FeedIdResponse($responseData);

        $this->assertEquals($expectedFeedId, $response->getFeedId());
    }

    /**
     * @return array
     */
    public function providerGetFeedId()
    {
        return [
            [
                'data' => [
                    'Head' => [
                        'Action' => 'Image',
                        'RequestId' => '000-000-r0003-frrw43'
                    ],
                    'Body' => []
                ],
                'feedId' => '000-000-r0003-frrw43'
            ]
        ];
    }


}
