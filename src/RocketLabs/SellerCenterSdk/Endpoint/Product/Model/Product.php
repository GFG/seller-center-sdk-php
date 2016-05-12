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
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->data[$key];
    }

    /**
     * @return string
     */
    public function getSellerSku()
    {
        return $this->data[self::SELLER_SKU];
    }

    /**
     * @param string $sellerSku
     * @return Product
     */
    public function setSellerSku($sellerSku)
    {
        $this->data[self::SELLER_SKU] = $sellerSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopSku()
    {
        return $this->data[self::SHOP_SKU];
    }

    /**
     * @param string $shopSku
     * @return Product
     */
    public function setShopSku($shopSku)
    {
        $this->data[self::SHOP_SKU] = $shopSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->data[self::NAME];
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->data[self::NAME] = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->data[self::BRAND];
    }

    /**
     * @param string $brand
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->data[self::BRAND] = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data[self::DESCRIPTION];
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->data[self::DESCRIPTION] = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxClass()
    {
        return $this->data[self::TAX_CLASS];
    }

    /**
     * @param string $taxClass
     * @return Product
     */
    public function setTaxClass($taxClass)
    {
        $this->data[self::TAX_CLASS] = $taxClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariation()
    {
        return $this->data[self::VARIATION];
    }

    /**
     * @param string $variation
     * @return Product
     */
    public function setVariation($variation)
    {
        $this->data[self::VARIATION] = $variation;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentSku()
    {
        return $this->data[self::PARENT_SKU];
    }

    /**
     * @param string $parentSku
     * @return Product
     */
    public function setParentSku($parentSku)
    {
        $this->data[self::PARENT_SKU] = $parentSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->data[self::QUANTITY];
    }

    /**
     * @param string $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->data[self::QUANTITY] = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentByNonSellable()
    {
        return $this->data[self::FULFILLMENT_BY_NON_SELLABLE];
    }

    /**
     * @param string $fulfillmentByNonSellable
     * @return Product
     */
    public function setFulfillmentByNonSellable($fulfillmentByNonSellable)
    {
        $this->data[self::FULFILLMENT_BY_NON_SELLABLE] = $fulfillmentByNonSellable;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailable()
    {
        return $this->data[self::AVAILABLE];
    }

    /**
     * @param string $available
     * @return Product
     */
    public function setAvailable($available)
    {
        $this->data[self::AVAILABLE] = $available;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->data[self::PRICE];
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->data[self::PRICE] = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->data[self::SALE_PRICE];
    }

    /**
     * @param float $salePrice
     * @return Product
     */
    public function setSalePrice($salePrice)
    {
        $this->data[self::SALE_PRICE] = $salePrice;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSaleStartDate()
    {
        return $this->data[self::SALE_START_DATE];
    }

    /**
     * @param DateTime $saleStartDate
     * @return Product
     */
    public function setSaleStartDate($saleStartDate)
    {
        $this->data[self::SALE_START_DATE] = $saleStartDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSaleEndDate()
    {
        return $this->data[self::SALE_END_DATE];
    }

    /**
     * @param DateTime $saleEndDate
     * @return Product
     */
    public function setSaleEndDate($saleEndDate)
    {
        $this->data[self::SALE_END_DATE] = $saleEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->data[self::STATUS];
    }

    /**
     * @param string $status
     * @return Product
     */
    public function setStatus($status)
    {
        $this->data[self::STATUS] = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->data[self::PRODUCT_ID];
    }

    /**
     * @param string $productId
     * @return Product
     */
    public function setProductId($productId)
    {
        $this->data[self::PRODUCT_ID] = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->data[self::URL];
    }

    /**
     * @param string $url
     * @return Product
     */
    public function setUrl($url)
    {
        $this->data[self::URL] = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainImage()
    {
        return $this->data[self::MAIN_IMAGE];
    }

    /**
     * @param string $mainImage
     * @return Product
     */
    public function setMainImage($mainImage)
    {
        $this->data[self::MAIN_IMAGE] = $mainImage;
        return $this;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->data[self::IMAGES];
    }

    /**
     * @param string $images
     * @return Product
     */
    public function setImages($images)
    {
        $this->data[self::IMAGES] = $images;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryCategory()
    {
        return $this->data[self::PRIMARY_CATEGORY];
    }

    /**
     * @param string $primaryCategory
     * @return Product
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->data[self::PRIMARY_CATEGORY] = $primaryCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->data[self::CATEGORIES];
    }

    /**
     * @param string $categories
     * @return Product
     */
    public function setCategories($categories)
    {
        $this->data[self::CATEGORIES] = $categories;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductData()
    {
        return $this->data[self::PRODUCT_DATA];
    }

    /**
     * @param string $productData
     * @return Product
     */
    public function setProductData($productData)
    {
        $this->data[self::PRODUCT_DATA] = $productData;
        return $this;
    }

}
