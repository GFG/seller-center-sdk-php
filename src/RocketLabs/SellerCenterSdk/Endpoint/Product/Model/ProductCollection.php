<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

class ProductCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = \Product::class;
}
