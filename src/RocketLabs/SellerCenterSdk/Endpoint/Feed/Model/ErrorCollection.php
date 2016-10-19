<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class ErrorCollection
 */
class ErrorCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Error::class;
}
