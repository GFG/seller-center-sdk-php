<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrder as GetOrderResponse;

/**
 * Class GetOrder
 * @method GetOrderResponse|ErrorResponse call(Client $client)
 */
class GetOrder extends GenericRequest
{
    const ACTION = 'GetOrder';
    const ORDER_ID_FIELD = 'OrderId';

    /**
     * @param string $orderId
     */
    public function __construct($orderId)
    {
        parent::__construct(Client::GET, static::ACTION, static::V1, [static::ORDER_ID_FIELD => $orderId]);
    }

    /**
     * @return string
     */
    public function getResponseClassName()
    {
        return GetOrderResponse::class;
    }
}
