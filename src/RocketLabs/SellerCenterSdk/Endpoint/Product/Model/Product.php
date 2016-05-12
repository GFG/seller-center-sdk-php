<?php
use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

class Product extends ModelAbstract
{
    const SELLERSKU = 'SellerSku';
    const SHOPSKU = 'ShopSku';
    const NAME = 'Name';
    const BRAND = 'Brand';
    const DESCRIPTION = 'Description';
    const TAXCLASS = 'TaxClass';
    const VARIATION = 'Variation';
    const PARENTSKU = 'ParentSku';
    const QUANTITY = 'Quantity';
    const FULFILLMENTBYNONSELLABLE = 'FulfillmentByNonSellable';
    const AVAILABLE = 'Available';
    const PRICE = 'Price';
    const SALEPRICE = 'SalePrice';
    const SALESTARTDATE = 'SaleStartDate';
    const SALEENDDATE = 'SaleEndDate';
    const STATUS = 'Status';
    const PRODUCTID = 'ProductId';
    const URL = 'Url';
    const MAINIMAGE = 'MainImage';
    const IMAGES = 'Images';
    const PRIMARYCATEGORY = 'PrimaryCategory';
    const CATEGORIES = 'Categories';
    const PRODUCTDATA = 'ProductData';

    protected $fieldDefinition = [
        self::SELLERSKU => self::TYPE_STRING,
        self::SHOPSKU => self::TYPE_STRING,
        self::NAME => self::TYPE_STRING,
        self::BRAND => self::TYPE_STRING,
        self::DESCRIPTION => self::TYPE_STRING,
        self::TAXCLASS => self::TYPE_STRING,
        self::VARIATION => self::TYPE_STRING,
        self::PARENTSKU => self::TYPE_STRING,
        self::QUANTITY => self::TYPE_INT,
        self::FULFILLMENTBYNONSELLABLE => self::TYPE_STRING,
        self::AVAILABLE => self::TYPE_STRING,
        self::PRICE => self::TYPE_FLOAT,
        self::SALEPRICE => self::TYPE_FLOAT,
        self::SALESTARTDATE => self::TYPE_DATETIME,
        self::SALEENDDATE => self::TYPE_DATETIME,
        self::STATUS => self::TYPE_STRING,
        self::PRODUCTID => self::TYPE_STRING,
        self::URL => self::TYPE_STRING,
        self::MAINIMAGE => self::TYPE_MIXED,
        self::IMAGES => self::TYPE_STRING,
        self::PRIMARYCATEGORY => self::TYPE_STRING,
        self::CATEGORIES => self::TYPE_STRING,
        self::PRODUCTDATA => self::TYPE_STRING,
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
        return $this->data[self::SELLERSKU];
    }

    /**
     * @param string $sellerSku
     * @return Product
     */
    public function setSellerSku($sellerSku)
    {
        $this->data[self::SELLERSKU] = $sellerSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopSku()
    {
        return $this->data[self::SHOPSKU];
    }

    /**
     * @param string $shopSku
     * @return Product
     */
    public function setShopSku($shopSku)
    {
        $this->data[self::SHOPSKU] = $shopSku;
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
        return $this->data[self::TAXCLASS];
    }

    /**
     * @param string $taxClass
     * @return Product
     */
    public function setTaxClass($taxClass)
    {
        $this->data[self::TAXCLASS] = $taxClass;
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
        return $this->data[self::PARENTSKU];
    }

    /**
     * @param string $parentSku
     * @return Product
     */
    public function setParentSku($parentSku)
    {
        $this->data[self::PARENTSKU] = $parentSku;
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
        return $this->data[self::FULFILLMENTBYNONSELLABLE];
    }

    /**
     * @param string $fulfillmentByNonSellable
     * @return Product
     */
    public function setFulfillmentByNonSellable($fulfillmentByNonSellable)
    {
        $this->data[self::FULFILLMENTBYNONSELLABLE] = $fulfillmentByNonSellable;
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
        return $this->data[self::SALEPRICE];
    }

    /**
     * @param float $salePrice
     * @return Product
     */
    public function setSalePrice($salePrice)
    {
        $this->data[self::SALEPRICE] = $salePrice;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSaleStartDate()
    {
        return $this->data[self::SALESTARTDATE];
    }

    /**
     * @param DateTime $saleStartDate
     * @return Product
     */
    public function setSaleStartDate($saleStartDate)
    {
        $this->data[self::SALESTARTDATE] = $saleStartDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSaleEndDate()
    {
        return $this->data[self::SALEENDDATE];
    }

    /**
     * @param DateTime $saleEndDate
     * @return Product
     */
    public function setSaleEndDate($saleEndDate)
    {
        $this->data[self::SALEENDDATE] = $saleEndDate;
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
        return $this->data[self::PRODUCTID];
    }

    /**
     * @param string $productId
     * @return Product
     */
    public function setProductId($productId)
    {
        $this->data[self::PRODUCTID] = $productId;
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
        return $this->data[self::MAINIMAGE];
    }

    /**
     * @param string $mainImage
     * @return Product
     */
    public function setMainImage($mainImage)
    {
        $this->data[self::MAINIMAGE] = $mainImage;
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
        return $this->data[self::PRIMARYCATEGORY];
    }

    /**
     * @param string $primaryCategory
     * @return Product
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->data[self::PRIMARYCATEGORY] = $primaryCategory;
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
        return $this->data[self::PRODUCTDATA];
    }

    /**
     * @param string $productData
     * @return Product
     */
    public function setProductData($productData)
    {
        $this->data[self::PRODUCTDATA] = $productData;
        return $this;
    }





















}
