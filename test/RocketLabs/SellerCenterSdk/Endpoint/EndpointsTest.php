<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

class EndpointsTest extends \PHPUnit_Framework_TestCase
{
    public function testOrder()
    {
        $this->assertInstanceOf(Order::class, Endpoints::order());
    }
}
