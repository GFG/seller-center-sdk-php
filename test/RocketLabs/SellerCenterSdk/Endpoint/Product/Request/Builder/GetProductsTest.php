<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;


use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldEnumValue;

class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    public function testCorrectSetup()
    {
        $builder = new GetProducts();
        $builder
            ->setFilter('all')
            ->setGlobalIdentifier(true)
            ->setSearch("search")
            ->build();
    }

    /**
     * @expectedException InvalidFieldEnumValue
     */
    public function testIncorrectSetup()
    {
        $builder = new GetProducts();
        $builder
            ->setFilter('nope')
            ->setGlobalIdentifier(true)
            ->setSearch("search")
            ->build();
    }

}
