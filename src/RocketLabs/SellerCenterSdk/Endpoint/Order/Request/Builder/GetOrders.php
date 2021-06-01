<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Exception\InvalidFieldEnumValue;
use RocketLabs\SellerCenterSdk\Core\Exception\InvalidSortingDirection;
use RocketLabs\SellerCenterSdk\Core\Exception\InvalidSortingField;
use RocketLabs\SellerCenterSdk\Core\Request\Builder\ListRequestBuilderAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrders as GetOrdersRequest;

/**
 * Class GetOrders
 */
class GetOrders extends ListRequestBuilderAbstract
{
    const SORT_FIELD_CREATED_AT = 'created_at';
    const SORT_FIELD_UPDATED_AT = 'updated_at';

    const STATUS_PENDING = 'pending';
    const STATUS_CANCEL = 'canceled';
    const STATUS_READY_TO_SHIP = 'ready_to_ship';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_RETURNED = 'returned';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_FAILED = 'failed';

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortDirection;

    /** @var array */
    protected $validSortFields = [self::SORT_FIELD_CREATED_AT, self::SORT_FIELD_UPDATED_AT];

    /** @var array  */
    private $validStatuses = [
        self::STATUS_PENDING,
        self::STATUS_CANCEL,
        self::STATUS_READY_TO_SHIP,
        self::STATUS_DELIVERED,
        self::STATUS_RETURNED,
        self::STATUS_SHIPPED,
        self::STATUS_FAILED
    ];

    /** @var string */
    private $status;

    /**
     * @return GetOrdersRequest
     */
    public function build()
    {
        return new GetOrdersRequest(
            $this->createdAfter,
            $this->createdBefore,
            $this->updatedAfter,
            $this->updatedBefore,
            $this->status,
            $this->limit,
            $this->offset,
            $this->sortBy,
            $this->sortDirection
        );
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->checkStatus($status);
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $sortBy
     * @param string $sortDirection
     * @return $this
     */
    public function setSorting($sortBy, $sortDirection = 'ASC')
    {
        $this->checkSortingField($sortBy);
        $this->checkSortingDirection($sortDirection);
        $this->sortBy = $sortBy;
        $this->sortDirection = $sortDirection;

        return $this;
    }

    /**
     * @param string $status
     */
    protected function checkStatus($status)
    {
        if (!in_array($status, $this->validStatuses)) {
            throw new InvalidFieldEnumValue($status, $this->validStatuses);
        }
    }

    /**
     * @param string $sortBy
     */
    protected function checkSortingField($sortBy)
    {
        $fields = $this->validSortFields;

        if (!in_array($sortBy, $fields)) {
            throw new InvalidSortingField($sortBy, $fields);
        }
    }

    /**
     * @param string $sortDirection
     */
    protected function checkSortingDirection($sortDirection)
    {
        if (!in_array($sortDirection, $this->validSortDirections)) {
            throw new InvalidSortingDirection($sortDirection);
        }
    }
}
