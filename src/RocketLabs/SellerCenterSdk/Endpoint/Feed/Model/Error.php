<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Error
 */
class Error extends ModelAbstract
{
    const CODE_KEY       = 'Code';
    const MESSAGE_KEY    = 'Message';
    const SELLER_SKU_KEY = 'SellerSku';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::CODE_KEY => self::TYPE_STRING,
        self::MESSAGE_KEY => self::TYPE_STRING,
        self::SELLER_SKU_KEY => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->data[self::CODE_KEY];
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->data[self::MESSAGE_KEY];
    }

    /**
     * @return string
     */
    public function getSellerSku()
    {
        return $this->data[self::SELLER_SKU_KEY];
    }
}
