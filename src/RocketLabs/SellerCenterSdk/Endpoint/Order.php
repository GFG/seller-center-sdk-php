<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\Builder\GetOrders;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetDocument;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrder;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\GetOrderItems;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToCanceled;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToPackedByMarketplace;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Request\SetStatusToReadyToShip;

/**
 * Class Order
 */
final class Order
{
    /**
     * @return GetOrders
     */
    public function getOrders()
    {
        return new GetOrders();
    }

    /**
     * @param int $orderId
     * @return GetOrder
     */
    public function getOrder($orderId)
    {
        return new GetOrder($orderId);
    }

    /**
     * @param int $orderId
     *
     * @return GetOrderItems
     */
    public function getOrderItems($orderId)
    {
        return new GetOrderItems($orderId);
    }

    /**
     * @param int[] $orderItemIds
     * @param string $documentType
     *
     * @return GetDocument
     */
    public function getDocument(array $orderItemIds, $documentType)
    {
        return new GetDocument($orderItemIds, $documentType);
    }

    /**
     * @param int $orderItemId
     * @param string $reason
     * @param string $reasonDetail
     * @return SetStatusToCanceled
     */
    public function setStatusToCanceled($orderItemId, $reason, $reasonDetail)
    {
        return new SetStatusToCanceled($orderItemId, $reason, $reasonDetail);
    }

    /**
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     * @return SetStatusToPackedByMarketplace
     */
    public function setStatusToPackedByMarketplace(array $orderItemIds, $deliveryType, $shippingProvider)
    {
        return new SetStatusToPackedByMarketplace($orderItemIds, $deliveryType, $shippingProvider);
    }

    /**
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     * @param string $trackingNumber
     * @return SetStatusToReadyToShip
     */
    public function setStatusToReadyToShip(array $orderItemIds, $deliveryType, $shippingProvider, $trackingNumber)
    {
        return new SetStatusToReadyToShip($orderItemIds, $deliveryType, $shippingProvider, $trackingNumber);
    }
}
