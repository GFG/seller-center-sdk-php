<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;


use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetProductsTest as GetProductsResponse;

class GetProducts extends GenericRequest
{
    const ACTION = 'GetProducts';

    const CREATED_AFTER_FIELD     = 'CreatedAfter';
    const CREATED_BEFORE_FIELD    = 'CreatedBefore';
    const UPDATED_AFTER_FIELD     = 'UpdatedAfter';
    const UPDATED_BEFORE_FIELD    = 'UpdatedBefore';
    const LIMIT_FIELD             = 'Limit';
    const OFFSET_FIELD            = 'Offset';
    const STATUS_FIELD            = 'Status';
    const SORT_BY_FIELD           = 'SortBy';
    const SORT_DIRECTION_FIELD    = 'SortDirection';
    const SEARCH_FIELD            = 'Search';
    const FILTER_FIELD            = 'Filter';
    const SKU_SELLER_LIST_FIELD   = 'SkuSellerList';
    const GLOBAL_IDENTIFIER_FIELD = 'GlobalIdentifier';

    public function __construct(
        \DateTime $createdAfter = null,
        \DateTime $createdBefore = null,
        \DateTime $updatedAfter = null,
        \DateTime $updatedBefore = null,
        $search = null,
        $filter = null,
        $limit = null,
        $offset = null,
        $skuSellerList = null,
        $globalIdentifier = null
    ) {
        $query = [];

        $createdAfter !== null && $query[static::CREATED_AFTER_FIELD] = $createdAfter->format(\DateTime::ISO8601);
        $createdBefore !== null && $query[static::CREATED_BEFORE_FIELD] = $createdBefore->format(\DateTime::ISO8601);
        $updatedAfter !== null && $query[static::UPDATED_AFTER_FIELD] = $updatedAfter->format(\DateTime::ISO8601);
        $updatedBefore !== null && $query[static::UPDATED_BEFORE_FIELD] = $updatedBefore->format(\DateTime::ISO8601);
        $limit !== null && $query[static::LIMIT_FIELD] = $limit;
        $offset !== null && $query[static::OFFSET_FIELD] = $offset;
        $search !== null && $query[static::SEARCH_FIELD] = $search;
        $filter !== null && $query[static::FILTER_FIELD] = $filter;
        $skuSellerList !== null && $query[static::SKU_SELLER_LIST_FIELD] = '[' . implode(',', $skuSellerList) . ']';
        $globalIdentifier !== null && $query[static::GLOBAL_IDENTIFIER_FIELD] = $globalIdentifier ? 1 : 0;

        parent::__construct(
            Client::GET,
            self::ACTION,
            self::V1,
            $query
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GetProductsResponse::class;
    }
}
