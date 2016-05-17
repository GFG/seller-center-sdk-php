<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class InvalidSortingDirection
 */
class InvalidSortingDirection extends \InvalidArgumentException
{
    const MESSAGE = 'Invalid sort direction "%s" has been given. You can use following directions "ASC" or "DESC"';

    /**
     * InvalidSortingDirection constructor.
     * @param string $sortDirection
     */
    public function __construct($sortDirection)
    {
        parent::__construct(sprintf(static::MESSAGE, $sortDirection));
    }
}
