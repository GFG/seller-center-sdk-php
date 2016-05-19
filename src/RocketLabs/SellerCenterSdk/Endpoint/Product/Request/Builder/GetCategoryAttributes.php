<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\Builder\RequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\GetCategoryAttributes as GetCategoryAttributesRequest;

/**
 * Class GetCategoryAttributes
 */
class GetCategoryAttributes extends RequestBuilderAbstract
{

    /**
     * @var int
     */
    protected $PrimaryCategory;

    /**
     * @return GetCategoryAttributesRequest
     */
    public function build()
    {
        return new GetCategoryAttributesRequest($this->toArray());
    }

    /**
     * @param int $primaryCategory
     * @return $this
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->PrimaryCategory = $primaryCategory;
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
