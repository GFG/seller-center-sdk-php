<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class ItemCollection
 */
class ItemCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Item::class;
}
