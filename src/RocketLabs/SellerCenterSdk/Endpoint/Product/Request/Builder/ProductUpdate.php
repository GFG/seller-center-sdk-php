<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\RequiredFieldValue;
use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\ProductUpdate as ProductUpdateRequest;

/**
 * Class ProductUpdate
 */
class ProductUpdate extends RequestBuilderAbstract
{

    /**
     * @var string
     */
    protected $SellerSku;

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
     * ProductUpdate constructor.
     *
     * @param string $sellerSku
     */
    public function __construct($sellerSku)
    {
        if (empty($sellerSku)) {
            throw new RequiredFieldValue(Product::SELLER_SKU);
        }

        $this->SellerSku = $sellerSku;
    }

    /**
     * @return ProductUpdateRequest
     */
    public function build()
    {
        return new ProductUpdateRequest($this->toArray());
    }

    /**
     * @param string $Status
     * @return ProductUpdate
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @param string $Name
     * @return ProductUpdate
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @param string $Variation
     * @return ProductUpdate
     */
    public function setVariation($Variation)
    {
        $this->Variation = $Variation;
        return $this;
    }

    /**
     * @param int $PrimaryCategory
     * @return ProductUpdate
     */
    public function setPrimaryCategory($PrimaryCategory)
    {
        $this->PrimaryCategory = $PrimaryCategory;
        return $this;
    }

    /**
     * @param string $Categories
     * @return ProductUpdate
     */
    public function setCategories($Categories)
    {
        $this->Categories = $Categories;
        return $this;
    }

    /**
     * @param string $BrowseNodes
     * @return ProductUpdate
     */
    public function setBrowseNodes($BrowseNodes)
    {
        $this->BrowseNodes = $BrowseNodes;
        return $this;
    }

    /**
     * @param string $Description
     * @return ProductUpdate
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @param string $Brand
     * @return ProductUpdate
     */
    public function setBrand($Brand)
    {
        $this->Brand = $Brand;
        return $this;
    }

    /**
     * @param float $Price
     * @return ProductUpdate
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @param float $SalePrice
     * @return ProductUpdate
     */
    public function setSalePrice($SalePrice)
    {
        $this->SalePrice = $SalePrice;
        return $this;
    }

    /**
     * @param \DateTime $SaleStartDate
     * @return ProductUpdate
     */
    public function setSaleStartDate(\DateTime $SaleStartDate)
    {
        $this->SaleStartDate = $SaleStartDate;
        return $this;
    }

    /**
     * @param \DateTime $SaleEndDate
     * @return ProductUpdate
     */
    public function setSaleEndDate(\DateTime $SaleEndDate)
    {
        $this->SaleEndDate = $SaleEndDate;
        return $this;
    }

    /**
     * @param string $TaxClass
     * @return ProductUpdate
     */
    public function setTaxClass($TaxClass)
    {
        $this->TaxClass = $TaxClass;
        return $this;
    }

    /**
     * @param string $ShipmentType
     * @return ProductUpdate
     */
    public function setShipmentType($ShipmentType)
    {
        $this->ShipmentType = $ShipmentType;
        return $this;
    }

    /**
     * @param string $ProductId
     * @return ProductUpdate
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @param string $Condition
     * @return ProductUpdate
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @param array $ProductData
     * @return ProductUpdate
     */
    public function setProductData(array $ProductData)
    {
        $this->ProductData = $ProductData;
        return $this;
    }

    /**
     * @param int $Quantity
     * @return ProductUpdate
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
        return array_filter(
            $this->convertToArray($this),
            function ($value) {
                if (!is_null($value)) {
                    return true;
                }
                return false;
            }
        ); // Removes all fields with null values because is not a valid value to be updated
    }

}
