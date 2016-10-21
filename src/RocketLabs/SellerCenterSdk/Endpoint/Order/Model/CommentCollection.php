<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\RestrictedArrayCollection;

/**
 * Class CommentCollection
 */
class CommentCollection extends RestrictedArrayCollection
{
    const ELEMENT_TYPE = Comment::class;
}
