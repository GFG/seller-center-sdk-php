<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Response\ErrorResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Response\GetOrderComments as GetOrderCommentsResponse;

/**
 * Class GetOrderComments
 * @method GetOrderCommentsResponse|ErrorResponse call(Client $client)
 */
class GetOrderComments extends GenericRequest
{
    const ACTION = 'GetOrderComments';
    const ORDER_ID_FIELD = 'OrderId';

    /**
     * GetOrderComments constructor.
     * @param int $orderId
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
        return GetOrderCommentsResponse::class;
    }
}
