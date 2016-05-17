<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class InvalidSortingField
 */
class InvalidSortingField extends \InvalidArgumentException
{
    const MESSAGE = 'Invalid sort field "%s" has been given. You can use following fields "%s"';

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
