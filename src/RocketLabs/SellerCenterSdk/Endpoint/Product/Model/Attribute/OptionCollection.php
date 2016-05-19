<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class OptionCollection
 */
class OptionCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Option::class;
}
