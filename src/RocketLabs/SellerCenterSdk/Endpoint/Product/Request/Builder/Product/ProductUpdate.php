<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductAbstract as ProductAbstractBuilder;

/**
 * Class ProductUpdate
 */
class ProductUpdate extends ProductAbstractBuilder
{

    /**
     * ProductUpdate constructor.
     *
     * @param string $sellerSku
     */
    public function __construct($sellerSku)
    {
        if (empty($sellerSku)) {
            throw new RequiredFieldValue(Product::SELLER_SKU);
        }

        $this->sellerSku = $sellerSku;
    }

    /**
     * @inheritdoc
     */
    public function setSellerSku($sellerSku)
    {
        throw new \BadMethodCallException('It is not allowed to call the `ProductUpdate::setSellerSku()` method.');
    }

    /**
     * @inheritdoc
     */
    public function setSalePrice($salePrice)
    {
        // If $salePrice is null we should send as empty string to avoid removal by the ProductUpdate::toArray() method.
        return parent::setSalePrice($salePrice === null ? '' : $salePrice);
    }

    /**
     * @return ProductUpdateRequest
     */
    public function build()
    {
        return new ProductUpdateRequest($this->toArray());
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return array_filter(
            parent::toArray(),
            function ($value) {
                return $value !== null;
            }
        ); // Removes all fields with null values because is not a valid value to be updated
    }

}
