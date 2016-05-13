<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class ProductCollection
 */
class ProductCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Product::class;
}
