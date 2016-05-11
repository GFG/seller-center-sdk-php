<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\Builder\GetOrders;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetDocument;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrder;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrderItems;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToCanceled;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToPackedByMarketplace;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToReadyToShip;

class OrderTest extends \PHPUnit_Framework_TestCase
{

    public function testGetOrders()
    {
        $this->assertInstanceOf(GetOrders::class, Endpoints::order()->getOrders());
    }

    public function testGetOrder()
    {
        $this->assertInstanceOf(GetOrder::class, Endpoints::order()->getOrder(1));
    }

    public function testGetOrderItems()
    {
        $this->assertInstanceOf(GetOrderItems::class, Endpoints::order()->getOrderItems(1));
    }

    public function testGetDocument()
    {
        $this->assertInstanceOf(GetDocument::class, Endpoints::order()->getDocument([1,2], 'invoice'));
    }

    public function testSetStatusToCanceled()
    {
        $this->assertInstanceOf(
            SetStatusToCanceled::class,
            Endpoints::order()->setStatusToCanceled(1, 'reason', 'reason details')
        );
    }

    public function testSetStatusToPackedByMarketplace()
    {
        $this->assertInstanceOf(
            SetStatusToPackedByMarketplace::class,
            Endpoints::order()->setStatusToPackedByMarketplace([1], 'dropship', 'DHL')
        );
    }

    public function testSetStatusToReadyToShip()
    {
        $this->assertInstanceOf(
            SetStatusToReadyToShip::class,
            Endpoints::order()->setStatusToReadyToShip([3], 'dropship', 'DHL', 'D111222333444')
        );
    }

}
