<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

/**
 * Class EndpointsTest
 */
class EndpointsTest extends \PHPUnit_Framework_TestCase
{
    public function testOrder()
    {
        $this->assertInstanceOf(Order::class, Endpoints::order());
    }

    public function testFeed()
    {
        $this->assertInstanceOf(Feed::class, Endpoints::feed());
    }

    public function testProduct()
    {
        $this->assertInstanceOf(Product::class, Endpoints::product());
    }
}
