<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;


/**
 * Class CategoryTreeCollectionTest
 * @package RocketLabs\SellerCenterSdk\Endpoint\Product\Model
 */
class CategoryTreeCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testClass()
    {
        $this->assertEquals(Category::class, CategoryCollection::ELEMENT_TYPE);
    }
}
