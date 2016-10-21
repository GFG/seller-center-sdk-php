<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\GetProducts;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductCreateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ProductUpdateCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product\ImageCollection;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryAttributes as GetCategoryAttributesRequest;
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
     * @param int $primaryCategory
     *
     * @return GetCategoryAttributesRequest
     */
    public function getCategoryAttributes($primaryCategory)
    {
        return new GetCategoryAttributesRequest($primaryCategory);
    }

    /**
     * @return ImageCollection
     */
    public function image()
    {
        return new ImageCollection();
    }

    /**
     * @return GetCategoryTree
     */
    public function getCategoryTree()
    {
        return new GetCategoryTree();
    }

}
