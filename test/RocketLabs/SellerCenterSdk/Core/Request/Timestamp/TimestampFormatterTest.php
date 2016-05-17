<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Timestamp;

class TimestampFormatterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param \DateTime $time
     * @param string $expected
     * @dataProvider providerGetFormattedTimestamp
     */
    public function testGetFormattedTimestamp(\DateTime $time, $expected)
    {
        $formattedTimestamp = (new TimestampFormatter())->getFormattedTimestamp($time);
        $this->assertEquals($expected, $formattedTimestamp);
    }

    public function testGetFormattedCurrentTimestamp()
    {
        $now = time();
        $formattedTimestamp = (new TimestampFormatter())->getFormattedTimestamp();

        $timestamp = date_create_from_format(\DateTime::ISO8601, $formattedTimestamp)->getTimestamp();

        $this->assertLessThanOrEqual(1, $timestamp - $now);
    }

    /**
     * @return array
     */
    public function providerGetFormattedTimestamp()
    {
        return [
            'now' => [
                'time' => date_create_from_format(\DateTime::ISO8601, '2016-03-16T11:52:08+0100'),
                'result' => '2016-03-16T11:52:08+0100'
            ]
        ];
    }
}
