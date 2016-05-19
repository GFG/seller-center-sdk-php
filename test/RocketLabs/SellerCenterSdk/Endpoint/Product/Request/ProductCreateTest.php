<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductCreateTest
 */
class ProductCreateTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $request = new ProductCreate([]);

        $this->assertEquals(Client::POST, $request->getMethod());
    }

    public function testGetResponseClassName()
    {
        $this->assertEquals(FeedIdResponse::class, (new ProductCreate([]))->getResponseClassName());
    }
}
