<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class CategoryTreeCollection
 */
class CategoryCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Category::class;
}
