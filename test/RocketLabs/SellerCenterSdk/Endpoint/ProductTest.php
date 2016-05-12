<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBrands()
    {
        $this->assertInstanceOf(GetBrands::class, Endpoints::product()->getBrands());
    }
}
