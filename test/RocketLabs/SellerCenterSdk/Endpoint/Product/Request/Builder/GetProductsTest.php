<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldEnumValue;

/**
 * Class GetProductsTest
 */
class GetProductsTest extends \PHPUnit_Framework_TestCase
{

    public function testCorrectSetup()
    {
        $builder = new GetProducts();
        $builder
            ->setFilter('all')
            ->setGlobalIdentifier(true)
            ->setSearch('search')
            ->build();
    }

    public function testIncorrectSetup()
    {

        $this->setExpectedException(InvalidFieldEnumValue::class);

        $builder = new GetProducts();
        $builder
            ->setFilter('nope')
            ->setGlobalIdentifier(true)
            ->setSearch('search')
            ->build();
    }

}
