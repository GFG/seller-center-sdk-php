<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\Product;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductRemove as ProductRemoveRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder\ProductAbstract as ProductAbstractBuilder;

/**
 * Class ProductRemove
 */
class ProductRemove extends ProductAbstractBuilder
{

    /**
     * ProductRemove constructor.
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
        throw new \BadMethodCallException('It is not allowed to call the `ProductRemove::setSellerSku()` method.');
    }

    /**
     * @return ProductRemoveRequest
     */
    public function build()
    {
        return new ProductRemoveRequest($this->toArray());
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