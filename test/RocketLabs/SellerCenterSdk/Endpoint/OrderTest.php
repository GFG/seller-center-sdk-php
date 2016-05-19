<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\Builder\GetOrders;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetDocument;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrder;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrderItems;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToCanceled;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToPackedByMarketplace;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToReadyToShip;

/**
 * Class OrderTest
 */
class OrderTest extends \PHPUnit_Framework_TestCase
{

    public function testGetOrders()
    {
        $this->assertInstanceOf(GetOrders::class, (new Order())->getOrders());
    }

    public function testGetOrder()
    {
        $this->assertInstanceOf(GetOrder::class, (new Order())->getOrder(1));
    }

    public function testGetOrderItems()
    {
        $this->assertInstanceOf(GetOrderItems::class, (new Order())->getOrderItems(1));
    }

    public function testGetDocument()
    {
        $this->assertInstanceOf(GetDocument::class, (new Order())->getDocument([1,2], 'invoice'));
    }

    public function testSetStatusToCanceled()
    {
        $this->assertInstanceOf(
            SetStatusToCanceled::class,
            (new Order())->setStatusToCanceled(1, 'reason', 'reason details')
        );
    }

    public function testSetStatusToPackedByMarketplace()
    {
        $this->assertInstanceOf(
            SetStatusToPackedByMarketplace::class,
            (new Order())->setStatusToPackedByMarketplace([1], 'dropship', 'DHL')
        );
    }

    public function testSetStatusToReadyToShip()
    {
        $this->assertInstanceOf(
            SetStatusToReadyToShip::class,
            (new Order())->setStatusToReadyToShip([3], 'dropship', 'DHL', 'D111222333444')
        );
    }

}
