<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class InvalidFieldValue
 */
class InvalidFieldValue extends \InvalidArgumentException
{
    const MESSAGE = 'Invalid field value "%s" has been given. %s';

    /**
     * InvalidFieldValue constructor.
     * @param string $value
     * @param string $description
     */
    public function __construct($value, $description = '')
    {
        parent::__construct(trim(sprintf(self::MESSAGE, $value, $description)));
    }
}
