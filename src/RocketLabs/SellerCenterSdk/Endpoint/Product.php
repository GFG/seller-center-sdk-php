<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetProducts;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductCreateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductUpdateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Image;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetBrands;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryTree;

/**
 * Class Product
 */
final class Product
{
    /**
     * @return GetBrands
     */
    public function getBrands()
    {
        return new GetBrands();
    }

    /**
     * @return ProductCreateCollection
     */
    public function productCreate()
    {
        return new ProductCreateCollection();
    }

    /**
     * @return ProductUpdateCollection
     */
    public function productUpdate()
    {
        return new ProductUpdateCollection();
    }

    /**
     * @return GetProducts
     */
    public function getProducts()
    {
        return new GetProducts();
    }

    /**
     * @param string $sellerSku
     * @return Image
     */
    public function image($sellerSku)
    {
        return new Image($sellerSku);
    }

    public function getCategoryTree()
    {
        return new GetCategoryTree();
    }

}
