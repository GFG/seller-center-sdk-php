<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;


use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\ProductCollection;

class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    public function testGetProducts() {
        $res = new GetProducts([]);
        $this->assertInstanceOf(ProductCollection::class, $res->getProducts());
    }
}
