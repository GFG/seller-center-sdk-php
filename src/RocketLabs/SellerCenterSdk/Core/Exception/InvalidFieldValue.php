<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

class InvalidFieldValue extends \InvalidArgumentException
{
    const MESSAGE = 'Invalid field value "%s" has been given. %s';

    /**
     * InvalidSortingField constructor.
     * @param string $value
     * @param string $description
     */
    public function __construct($value, $description = '')
    {
        parent::__construct(trim(printf(static::MESSAGE, $value, $description)));
    }
}