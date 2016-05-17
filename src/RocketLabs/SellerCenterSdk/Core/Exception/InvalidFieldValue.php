<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class InvalidFieldValue
 */
class InvalidFieldValue extends \InvalidArgumentException
{
    const MESSAGE = 'Invalid field value "%s" has been given. You can use following values "%s"';

    /**
     * InvalidSortingField constructor.
     * @param string $value
     * @param array $allowedFields
     */
    public function __construct($value, array $allowedFields)
    {
        parent::__construct(sprintf(static::MESSAGE, $value, implode('", "', $allowedFields)));
    }
}
