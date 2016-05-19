<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\Feed;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\FeedCollection;

/**
 * Class FeedListTest
 */
class FeedListTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider testConstructorProvider
     *
     * @param array $feeds
     * @param array $expected
     */
    public function testConstructor(array $feeds, array $expected)
    {
        $fieldList = new FeedList(
            [
                'Head' => [],
                'Body' => $feeds
            ]
        );

        $this->assertInstanceOf(FeedCollection::class, $fieldList->getFeeds());

        $this->assertSame($expected['count'], $fieldList->getFeeds()->count());
        $this->assertEquals($expected['feeds'], $fieldList->getFeeds()->toArray());
    }

    public function testEmpty()
    {
        $fieldList = new FeedList(
            [
                'Head' => [],
                'Body' => []
            ]
        );

        $this->assertInstanceOf(FeedCollection::class, $fieldList->getFeeds());
        $this->assertTrue($fieldList->getFeeds()->isEmpty());
    }

    /**
     * @return array
     */
    public function testConstructorProvider()
    {
        return [
            'multiple feeds' => [
                'feeds' => [
                    'Feed' => [
                        [
                            'Feed' => 'Hello world !'
                        ],
                        [
                            'Feed' => 'Hello world 2 !'
                        ]
                    ]
                ],
                'expected' => [
                    'count' => 2,
                    'feeds' => [
                        new Feed(
                            [
                                'Feed' => 'Hello world !',
                            ]
                        ),
                        new Feed(
                            [
                                'Feed' => 'Hello world 2 !',
                            ]
                        )
                    ]
                ]
            ],
            'single feed' => [
                'feeds' => [
                    'Feed' => [
                        'Feed' => 'Hello world !'
                    ]
                ],
                'expected' => [
                    'count' => 1,
                    'feeds' => [
                        new Feed(
                            [
                                'Feed' => 'Hello world !'
                            ]
                        )
                    ]
                ]
            ]
        ];
    }
}
