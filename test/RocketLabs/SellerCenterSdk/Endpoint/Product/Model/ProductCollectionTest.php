<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;


class ProductCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testClass()
    {
        $this->assertEquals(Product::class, ProductCollection::ELEMENT_TYPE);
    }

}
