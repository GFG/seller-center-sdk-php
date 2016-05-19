<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\FeedIdResponse;

/**
 * Class ProductUpdateTest
 */
class ProductUpdateTest extends \PHPUnit_Framework_TestCase
{

    public function testGetMethod()
    {
        $request = new ProductUpdate([]);

        $this->assertEquals(Client::POST, $request->getMethod());
    }

    public function testGetResponseClassName()
    {
        $this->assertEquals(FeedIdResponse::class, (new ProductUpdate([]))->getResponseClassName());
    }
}
