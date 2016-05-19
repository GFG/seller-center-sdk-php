<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrders as GetOrdersResponse;

/**
 * Class GetOrders
 * @method GetOrdersResponse|ErrorResponse call(Client $client)
 */
class GetOrders extends GenericRequest
{
    const ACTION = 'GetOrders';

    const CREATED_AFTER_FIELD  = 'CreatedAfter';
    const CREATED_BEFORE_FIELD = 'CreatedBefore';
    const UPDATED_AFTER_FIELD  = 'UpdatedAfter';
    const UPDATED_BEFORE_FIELD = 'UpdatedBefore';
    const LIMIT_FIELD          = 'Limit';
    const OFFSET_FIELD         = 'Offset';
    const STATUS_FIELD         = 'Status';
    const SORT_BY_FIELD        = 'SortBy';
    const SORT_DIRECTION_FIELD = 'SortDirection';

    /**
     * GetOrders constructor.
     * @param \DateTimeInterface|null $createdAfter
     * @param \DateTimeInterface|null $createdBefore
     * @param \DateTimeInterface|null $updatedAfter
     * @param \DateTimeInterface|null $updatedBefore
     * @param string|null $status
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $sortBy
     * @param string|null $sortDirection
     */
    public function __construct(
        \DateTimeInterface $createdAfter = null,
        \DateTimeInterface $createdBefore = null,
        \DateTimeInterface $updatedAfter = null,
        \DateTimeInterface $updatedBefore = null,
        $status = null,
        $limit = null,
        $offset = null,
        $sortBy = null,
        $sortDirection = null
    ) {
        $query = [];

        $createdAfter !== null && $query[static::CREATED_AFTER_FIELD] = $createdAfter->format(\DateTime::ISO8601);
        $createdBefore !== null && $query[static::CREATED_BEFORE_FIELD] = $createdBefore->format(\DateTime::ISO8601);
        $updatedAfter !== null && $query[static::UPDATED_AFTER_FIELD] = $updatedAfter->format(\DateTime::ISO8601);
        $updatedBefore !== null && $query[static::UPDATED_BEFORE_FIELD] = $updatedBefore->format(\DateTime::ISO8601);
        $status !== null && $query[static::STATUS_FIELD] = $status;
        $limit !== null && $query[static::LIMIT_FIELD] = $limit;
        $offset !== null && $query[static::OFFSET_FIELD] = $offset;
        $sortBy !== null && $query[static::SORT_BY_FIELD] = $sortBy;
        $sortDirection !== null && $query[static::SORT_DIRECTION_FIELD] = $sortDirection;

        parent::__construct(
            Client::GET,
            static::ACTION,
            static::V1,
            $query
        );
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GetOrdersResponse::class;
    }
}
