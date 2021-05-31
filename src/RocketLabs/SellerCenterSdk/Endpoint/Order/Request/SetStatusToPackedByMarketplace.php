<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;

/**
 * Class SetStatusToPackedByMarketplace
 */
class SetStatusToPackedByMarketplace extends GenericRequest
{
    const ACTION = 'SetStatusToPackedByMarketplace';
    const ORDER_ITEM_IDS = 'OrderItemIds';
    const DELIVERY_TYPE = 'DeliveryType';
    const SHIPPING_PROVIDER = 'ShippingProvider';

    /**
     * SetStatusToCanceled constructor.
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     */
    public function __construct(array $orderItemIds, $deliveryType, $shippingProvider)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [
                static::ORDER_ITEM_IDS => implode(',', $orderItemIds),
                static::DELIVERY_TYPE => $deliveryType,
                static::SHIPPING_PROVIDER => $shippingProvider
            ]
        );
    }
}
