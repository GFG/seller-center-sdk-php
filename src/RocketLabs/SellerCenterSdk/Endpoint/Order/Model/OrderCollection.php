<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class OrderCollection
 */
class OrderCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Order::class;
}
