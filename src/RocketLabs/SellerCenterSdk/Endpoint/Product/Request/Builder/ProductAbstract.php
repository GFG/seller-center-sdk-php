<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;

/**
 * Class ProductAbstract
 */
abstract class ProductAbstract extends RequestBuilderAbstract
{

    /**
     * @var string
     */
    protected $sellerSku;

    /**
     * @var string
     */
    protected $parentSku;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $variation;

    /**
     * @var int
     */
    protected $primaryCategory;

    /**
     * @var string
     */
    protected $categories;

    /**
     * @var string
     */
    protected $browseNodes;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $brand;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $salePrice;

    /**
     * @var \DateTimeInterface
     */
    protected $saleStartDate;

    /**
     * @var \DateTimeInterface
     */
    protected $saleEndDate;

    /**
     * @var string
     */
    protected $taxClass;

    /**
     * @var string
     */
    protected $shipmentType;

    /**
     * @var string
     */
    protected $productId;

    /**
     * @var string
     */
    protected $condition;

    /**
     * @var array
     */
    protected $productData;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @param string $sellerSku
     * @return static
     */
    public function setSellerSku($sellerSku)
    {
        $this->sellerSku = $sellerSku;
        return $this;
    }

    /**
     * @param string $parentSku
     * @return static
     */
    public function setParentSku($parentSku)
    {
        $this->parentSku = $parentSku;
        return $this;
    }

    /**
     * @param string $status
     * @return static
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $name
     * @return static
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $variation
     * @return static
     */
    public function setVariation($variation)
    {
        $this->variation = $variation;
        return $this;
    }

    /**
     * @param int $primaryCategory
     * @return static
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    /**
     * @param string $categories
     * @return static
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @param string $browseNodes
     * @return static
     */
    public function setBrowseNodes($browseNodes)
    {
        $this->browseNodes = $browseNodes;
        return $this;
    }

    /**
     * @param string $description
     * @return static
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $brand
     * @return static
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @param float $price
     * @return static
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param float $salePrice
     * @return static
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * @param \DateTimeInterface $saleStartDate
     * @return static
     */
    public function setSaleStartDate(\DateTimeInterface $saleStartDate)
    {
        $this->saleStartDate = $saleStartDate;
        return $this;
    }

    /**
     * @param \DateTimeInterface $saleEndDate
     * @return static
     */
    public function setSaleEndDate(\DateTimeInterface $saleEndDate)
    {
        $this->saleEndDate = $saleEndDate;
        return $this;
    }

    /**
     * @param string $taxClass
     * @return static
     */
    public function setTaxClass($taxClass)
    {
        $this->taxClass = $taxClass;
        return $this;
    }

    /**
     * @param string $shipmentType
     * @return static
     */
    public function setShipmentType($shipmentType)
    {
        $this->shipmentType = $shipmentType;
        return $this;
    }

    /**
     * @param string $productId
     * @return static
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param string $condition
     * @return static
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @param array $productData
     * @return static
     */
    public function setProductData(array $productData)
    {
        $this->productData = $productData;
        return $this;
    }

    /**
     * @param int $quantity
     * @return static
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->convertToArray($this);
    }
}
