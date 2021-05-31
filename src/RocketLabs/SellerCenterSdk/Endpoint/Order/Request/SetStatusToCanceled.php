<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;

/**
 * Class SetStatusToCanceled
 */
class SetStatusToCanceled extends GenericRequest
{
    const ACTION = 'SetStatusToCanceled';
    const ORDER_ITEM_ID = 'OrderItemId';
    const REASON = 'Reason';
    const REASON_DETAIL = 'ReasonDetail';

    /**
     * SetStatusToCanceled constructor.
     * @param int $orderItemId
     * @param string $reason
     * @param string $reasonDetail
     */
    public function __construct($orderItemId, $reason, $reasonDetail)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [
                static::ORDER_ITEM_ID => $orderItemId,
                static::REASON => $reason,
                static::REASON_DETAIL => $reasonDetail
            ]
        );
    }
}
