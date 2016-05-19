<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

/**
 * Class CategoryCollectionTest
 */
class CategoryCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $this->assertEquals(Category::class, CategoryCollection::ELEMENT_TYPE);
    }
}
