<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Brand
 */
class Brand extends ModelAbstract
{
    const NAME_KEY = 'Name';
    const GLOBAL_IDENTIFIER_KEY = 'GlobalIdentifier';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::NAME_KEY => self::TYPE_STRING,
        self::GLOBAL_IDENTIFIER_KEY => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->data[self::NAME_KEY];
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier()
    {
        return $this->data[self::GLOBAL_IDENTIFIER_KEY];
    }
}
