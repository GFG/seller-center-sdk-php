<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class RequiredFieldValue
 */
class RequiredFieldValue extends \InvalidArgumentException
{
    const MESSAGE = 'The field `%s` is required.';

    /**
     * RequiredFieldValue constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct(trim(sprintf(static::MESSAGE, $name)));
    }
}
