<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Brand
 */
class Brand extends ModelAbstract
{
    const ID_KEY = 'BrandId';
    const NAME_KEY = 'Name';
    const GLOBAL_IDENTIFIER_KEY = 'GlobalIdentifier';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::ID_KEY => self::TYPE_INT,
        self::NAME_KEY => self::TYPE_STRING,
        self::GLOBAL_IDENTIFIER_KEY => self::TYPE_STRING,
    ];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->data[self::ID_KEY];
    }

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
