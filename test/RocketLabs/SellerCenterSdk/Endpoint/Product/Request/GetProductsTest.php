<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\RequestInterface;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetProducts as GetProductsRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetProducts as GetProductsResponse;

/**
 * Class GetProductsTest
 */
class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    public function testGetResponseClassName()
    {
        $req = new GetProductsRequest();
        $this->assertEquals(GetProductsResponse::class, $req->getResponseClassName());
    }

    public function testGetAction()
    {
        $req = new GetProductsRequest();
        $this->assertEquals('GetProducts', $req->getAction());
    }

    public function testGetMethod()
    {
        $req = new GetProductsRequest();
        $this->assertEquals(Client::GET, $req->getMethod());
    }

    public function testGetVersion()
    {
        $req = new GetProductsRequest();
        $this->assertEquals(RequestInterface::V1, $req->getVersion());
    }
}
