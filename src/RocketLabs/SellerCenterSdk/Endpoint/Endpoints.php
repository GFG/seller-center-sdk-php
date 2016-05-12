<?php

namespace RocketLabs\SellerCenterSdk\Endpoint;

/**
 * Class Endpoints
 */
final class Endpoints
{
    /** @var Order */
    protected static $order;

    /** @var Product */
    protected static $product;

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

    /**
     * @return Product
     */
    public static function product()
    {
        if (!static::$product) {
            static::$product = new Product();
        }
        return static::$product;
    }
}
