<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

/**
 * Class Endpoints
 */
final class Endpoints
{
    /** @var Order */
    protected static $order;

    /**
     * @return Order
     */
    public static function order()
    {
        if (!static::$order) {
            static::$order = new Order();
        }
        return static::$order;
    }
}
