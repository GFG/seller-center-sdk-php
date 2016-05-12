<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;

/**
 * Class ProductTest
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBrands()
    {
        $this->assertInstanceOf(GetBrands::class, Endpoints::product()->getBrands());
    }

    public function testImage()
    {
        $this->assertInstanceOf(Image::class, Endpoints::product()->image('someSKU'));
    }
}
