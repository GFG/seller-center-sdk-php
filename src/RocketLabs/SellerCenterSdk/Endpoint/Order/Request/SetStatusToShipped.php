<?php
namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;

/**
 * Class SetStatusToShipped
 */
class SetStatusToShipped extends GenericRequest
{
    const ACTION = 'SetStatusToShipped';
    const ORDER_ITEM_ID = 'OrderItemId';

    /**
     * @param int[] $orderItemId
     */
    public function __construct($orderItemId)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [
                static::ORDER_ITEM_ID => $orderItemId
            ]
        );
    }
}
