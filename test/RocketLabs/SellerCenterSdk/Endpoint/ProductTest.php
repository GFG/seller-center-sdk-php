<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetCategoryAttributes;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetProducts;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductCreateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductUpdateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryTree;

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

    public function testGetProducts()
    {
        $this->assertInstanceOf(GetProducts::class, Endpoints::product()->getProducts());
    }

    public function testProductCreate()
    {
        $this->assertInstanceOf(ProductCreateCollection::class, Endpoints::product()->productCreate());
    }

    public function testProductUpdate()
    {
        $this->assertInstanceOf(ProductUpdateCollection::class, Endpoints::product()->productUpdate());
    }

    public function testGetCategoryAttributes()
    {
        $this->assertInstanceOf(GetCategoryAttributes::class, Endpoints::product()->getCategoryAttributes());
    }

    public function testGetCategoryTree()
    {
        $this->assertInstanceOf(GetCategoryTree::class, Endpoints::product()->getCategoryTree());
    }
}
