<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldEnumValue;
use RocketLabs\SellerCenterSdk\Core\Request\Builder\ListRequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetProducts as GetProductsRequest;

/**
 * Class GetProducts
 */
class GetProducts extends ListRequestBuilderAbstract
{
    /**
     * @var string
     */
    private $search;

    /**
     * @var string
     */
    private $filter;

    /**
     * @var array
     */
    private $validFilter = [
        'all',
        'live',
        'inactive',
        'deleted',
        'image-missing',
        'pending',
        'rejected',
        'sold-out'
    ];

    /**
     * @var array
     */
    private $skuSellerList;

    /**
     * @var bool
     */
    private $globalIdentifier;

    /**
     * @return \RocketLabs\SellerCenterSdk\Core\Request\GenericRequest
     */
    public function build()
    {
        return new GetProductsRequest(
            $this->createdAfter,
            $this->createdBefore,
            $this->updatedAfter,
            $this->updatedBefore,
            $this->search,
            $this->filter,
            $this->limit,
            $this->offset,
            $this->skuSellerList,
            $this->globalIdentifier
        );
    }

    /**
     * @param boolean $globalIdentifier
     * @return GetProducts
     */
    public function setGlobalIdentifier($globalIdentifier)
    {
        $this->globalIdentifier = $globalIdentifier;
        return $this;
    }

    /**
     * @param string $search
     * @return GetProducts
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @param string $filter
     * @return GetProducts
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        if (!in_array($filter, $this->validFilter)) {
            throw new InvalidFieldEnumValue($filter, $this->validFilter);
        }
        return $this;
    }
}
