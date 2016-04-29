<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;

/**
 * Class SetStatusToReadyToShip
 */
class SetStatusToReadyToShip extends GenericRequest
{
    const ACTION = 'SetStatusToReadyToShip';
    const ORDER_ITEM_IDS = 'OrderItemIds';
    const DELIVERY_TYPE = 'DeliveryType';
    const SHIPPING_PROVIDER = 'ShippingProvider';
    const TRACKING_NUMBER = 'TrackingNumber';

    /**
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     * @param string $trackingNumber
     */
    public function __construct(array $orderItemIds, $deliveryType, $shippingProvider, $trackingNumber)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [
                static::ORDER_ITEM_IDS => implode(',', $orderItemIds),
                static::DELIVERY_TYPE => $deliveryType,
                static::SHIPPING_PROVIDER => $shippingProvider,
                static::TRACKING_NUMBER => $trackingNumber
            ]
        );
    }
}
