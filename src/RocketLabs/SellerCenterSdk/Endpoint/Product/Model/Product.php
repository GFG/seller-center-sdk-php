<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Product
 */
class Product extends ModelAbstract
{
    const SELLER_SKU = 'SellerSku';
    const SHOP_SKU = 'ShopSku';
    const NAME = 'Name';
    const BRAND = 'Brand';
    const DESCRIPTION = 'Description';
    const TAX_CLASS = 'TaxClass';
    const VARIATION = 'Variation';
    const PARENT_SKU = 'ParentSku';
    const QUANTITY = 'Quantity';
    const FULFILLMENT_BY_NON_SELLABLE = 'FulfillmentByNonSellable';
    const AVAILABLE = 'Available';
    const PRICE = 'Price';
    const SALE_PRICE = 'SalePrice';
    const SALE_START_DATE = 'SaleStartDate';
    const SALE_END_DATE = 'SaleEndDate';
    const STATUS = 'Status';
    const PRODUCT_ID = 'ProductId';
    const URL = 'Url';
    const MAIN_IMAGE = 'MainImage';
    const IMAGES = 'Images';
    const PRIMARY_CATEGORY = 'PrimaryCategory';
    const CATEGORIES = 'Categories';
    const PRODUCT_DATA = 'ProductData';
    const BROWSE_NODES = 'BrowseNodes';
    const SHIPMENT_TYPE = 'ShipmentType';
    const CONDITION = 'Condition';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::SELLER_SKU => self::TYPE_STRING,
        self::SHOP_SKU => self::TYPE_STRING,
        self::NAME => self::TYPE_STRING,
        self::BRAND => self::TYPE_STRING,
        self::DESCRIPTION => self::TYPE_STRING,
        self::TAX_CLASS => self::TYPE_STRING,
        self::VARIATION => self::TYPE_STRING,
        self::PARENT_SKU => self::TYPE_STRING,
        self::QUANTITY => self::TYPE_INT,
        self::FULFILLMENT_BY_NON_SELLABLE => self::TYPE_STRING,
        self::AVAILABLE => self::TYPE_STRING,
        self::PRICE => self::TYPE_FLOAT,
        self::SALE_PRICE => self::TYPE_FLOAT,
        self::SALE_START_DATE => self::TYPE_DATETIME,
        self::SALE_END_DATE => self::TYPE_DATETIME,
        self::STATUS => self::TYPE_STRING,
        self::PRODUCT_ID => self::TYPE_STRING,
        self::URL => self::TYPE_STRING,
        self::MAIN_IMAGE => self::TYPE_MIXED,
        self::IMAGES => self::TYPE_STRING,
        self::PRIMARY_CATEGORY => self::TYPE_STRING,
        self::CATEGORIES => self::TYPE_STRING,
        self::PRODUCT_DATA => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getSellerSku()
    {
        return $this->data[self::SELLER_SKU];
    }

    /**
     * @return string
     */
    public function getShopSku()
    {
        return $this->data[self::SHOP_SKU];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->data[self::NAME];
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->data[self::BRAND];
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data[self::DESCRIPTION];
    }

    /**
     * @return string
     */
    public function getTaxClass()
    {
        return $this->data[self::TAX_CLASS];
    }

    /**
     * @return string
     */
    public function getVariation()
    {
        return $this->data[self::VARIATION];
    }

    /**
     * @return string
     */
    public function getParentSku()
    {
        return $this->data[self::PARENT_SKU];
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->data[self::QUANTITY];
    }

    /**
     * @return string
     */
    public function getFulfillmentByNonSellable()
    {
        return $this->data[self::FULFILLMENT_BY_NON_SELLABLE];
    }

    /**
     * @return string
     */
    public function getAvailable()
    {
        return $this->data[self::AVAILABLE];
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->data[self::PRICE];
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->data[self::SALE_PRICE];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSaleStartDate()
    {
        return $this->data[self::SALE_START_DATE];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSaleEndDate()
    {
        return $this->data[self::SALE_END_DATE];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->data[self::STATUS];
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->data[self::PRODUCT_ID];
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->data[self::URL];
    }

    /**
     * @return string
     */
    public function getMainImage()
    {
        return $this->data[self::MAIN_IMAGE];
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->data[self::IMAGES];
    }

    /**
     * @return string
     */
    public function getPrimaryCategory()
    {
        return $this->data[self::PRIMARY_CATEGORY];
    }

    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->data[self::CATEGORIES];
    }

    /**
     * @return string
     */
    public function getProductData()
    {
        return $this->data[self::PRODUCT_DATA];
    }

}
