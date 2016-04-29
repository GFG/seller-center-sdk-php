<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

class StatusCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     * @param array $data
     */
    public function testIterator(array $data)
    {
        $collection = $this->buildCollection($data);

        foreach ($collection as $status) {
            $this->assertInternalType('string', $status);
        }

        $collection->rewind();
        $this->assertEquals('pending', $collection->current());
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'valid data' => [
                [
                    StatusCollection::STATUS_KEY => [
                        'pending',
                        'canceled'
                    ]
                ]
            ],
            'valid data with one stats' => [
                [
                    StatusCollection::STATUS_KEY => 'pending'
                ]
            ]
        ];
    }

    /**
     * @param array $data
     * @return StatusCollection
     */
    protected function buildCollection(array $data)
    {
        return new StatusCollection($data);
    }
}
