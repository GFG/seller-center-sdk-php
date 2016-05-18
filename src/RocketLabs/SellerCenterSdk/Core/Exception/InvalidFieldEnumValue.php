<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

/**
 * Class InvalidFieldValue
 */
class InvalidFieldEnumValue extends InvalidFieldValue
{
    const MESSAGE = 'You can use following values "%s"';

    /**
     * InvalidFieldEnumValue constructor.
     * @param string $value
     * @param array $allowedFields
     */
    public function __construct($value, array $allowedFields)
    {
        parent::__construct($value, sprintf(self::MESSAGE, implode('", "', $allowedFields)));
    }
}
