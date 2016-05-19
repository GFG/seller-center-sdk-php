<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;

/**
 * Class Option
 */
class Option
{

    const GLOBAL_IDENTIFIER = 'GlobalIdentifier';
    const NAME = 'Name';
    const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    protected $GlobalIdentifier;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var bool
     */
    protected $isDefault;

    /**
     * Option constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->GlobalIdentifier = $data[static::GLOBAL_IDENTIFIER];
        $this->Name = $data[static::NAME];
        $this->isDefault = $data[static::IS_DEFAULT];
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier()
    {
        return $this->GlobalIdentifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return boolean
     */
    public function isDefault()
    {
        return $this->isDefault;
    }
}
