<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductCreate as ProductCreateRequest;

/**
 * Class ProductCreate
 */
class ProductCreate extends RequestBuilderAbstract
{

    /**
     * @var string
     */
    protected $SellerSku;

    /**
     * @var string
     */
    protected $ParentSku;

    /**
     * @var string
     */
    protected $Status;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $Variation;

    /**
     * @var int
     */
    protected $PrimaryCategory;

    /**
     * @var string
     */
    protected $Categories;

    /**
     * @var string
     */
    protected $BrowseNodes;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $Brand;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var float
     */
    protected $SalePrice;

    /**
     * @var \DateTime
     */
    protected $SaleStartDate;

    /**
     * @var \DateTime
     */
    protected $SaleEndDate;

    /**
     * @var string
     */
    protected $TaxClass;

    /**
     * @var string
     */
    protected $ShipmentType;

    /**
     * @var string
     */
    protected $ProductId;

    /**
     * @var string
     */
    protected $Condition;

    /**
     * @var array
     */
    protected $ProductData;

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @return ProductCreateRequest
     */
    public function build()
    {
        return new ProductCreateRequest($this->toArray());
    }

    /**
     * @param string $SellerSku
     * @return ProductCreate
     */
    public function setSellerSku($SellerSku)
    {
        $this->SellerSku = $SellerSku;
        return $this;
    }

    /**
     * @param string $ParentSku
     * @return ProductCreate
     */
    public function setParentSku($ParentSku)
    {
        $this->ParentSku = $ParentSku;
        return $this;
    }

    /**
     * @param string $Status
     * @return ProductCreate
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @param string $Name
     * @return ProductCreate
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @param string $Variation
     * @return ProductCreate
     */
    public function setVariation($Variation)
    {
        $this->Variation = $Variation;
        return $this;
    }

    /**
     * @param int $PrimaryCategory
     * @return ProductCreate
     */
    public function setPrimaryCategory($PrimaryCategory)
    {
        $this->PrimaryCategory = $PrimaryCategory;
        return $this;
    }

    /**
     * @param string $Categories
     * @return ProductCreate
     */
    public function setCategories($Categories)
    {
        $this->Categories = $Categories;
        return $this;
    }

    /**
     * @param string $BrowseNodes
     * @return ProductCreate
     */
    public function setBrowseNodes($BrowseNodes)
    {
        $this->BrowseNodes = $BrowseNodes;
        return $this;
    }

    /**
     * @param string $Description
     * @return ProductCreate
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @param string $Brand
     * @return ProductCreate
     */
    public function setBrand($Brand)
    {
        $this->Brand = $Brand;
        return $this;
    }

    /**
     * @param float $Price
     * @return ProductCreate
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @param float $SalePrice
     * @return ProductCreate
     */
    public function setSalePrice($SalePrice)
    {
        $this->SalePrice = $SalePrice;
        return $this;
    }

    /**
     * @param \DateTime $SaleStartDate
     * @return ProductCreate
     */
    public function setSaleStartDate(\DateTime $SaleStartDate)
    {
        $this->SaleStartDate = $SaleStartDate;
        return $this;
    }

    /**
     * @param \DateTime $SaleEndDate
     * @return ProductCreate
     */
    public function setSaleEndDate(\DateTime $SaleEndDate)
    {
        $this->SaleEndDate = $SaleEndDate;
        return $this;
    }

    /**
     * @param string $TaxClass
     * @return ProductCreate
     */
    public function setTaxClass($TaxClass)
    {
        $this->TaxClass = $TaxClass;
        return $this;
    }

    /**
     * @param string $ShipmentType
     * @return ProductCreate
     */
    public function setShipmentType($ShipmentType)
    {
        $this->ShipmentType = $ShipmentType;
        return $this;
    }

    /**
     * @param string $ProductId
     * @return ProductCreate
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @param string $Condition
     * @return ProductCreate
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @param array $ProductData
     * @return ProductCreate
     */
    public function setProductData(array $ProductData)
    {
        $this->ProductData = $ProductData;
        return $this;
    }

    /**
     * @param int $Quantity
     * @return ProductCreate
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
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
