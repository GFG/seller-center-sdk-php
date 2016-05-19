<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetProducts;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductCreateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductUpdateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryAttributes;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryTree;

/**
 * Class ProductTest
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBrands()
    {
        $this->assertInstanceOf(GetBrands::class, (new Product())->getBrands());
    }

    public function testImage()
    {
        $this->assertInstanceOf(Image::class, (new Product())->image('someSKU'));
    }

    public function testGetProducts()
    {
        $this->assertInstanceOf(GetProducts::class, (new Product())->getProducts());
    }

    public function testProductCreate()
    {
        $this->assertInstanceOf(ProductCreateCollection::class, (new Product())->productCreate());
    }

    public function testProductUpdate()
    {
        $this->assertInstanceOf(ProductUpdateCollection::class, (new Product())->productUpdate());
    }

    public function testGetCategoryAttributes()
    {
        $this->assertInstanceOf(GetCategoryAttributes::class, (new Product())->getCategoryAttributes(1));
    }

    public function testGetCategoryTree()
    {
        $this->assertInstanceOf(GetCategoryTree::class, (new Product())->getCategoryTree());
    }
}
