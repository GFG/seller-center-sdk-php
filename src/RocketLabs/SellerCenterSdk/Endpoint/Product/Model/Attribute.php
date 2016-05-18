<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Attribute
 */
class Attribute extends ModelAbstract
{

    const NAME = 'Name';
    const LABEL = 'Label';
    const IS_MANDATORY = 'isMandatory';
    const DESCRIPTION = 'Description';
    const ATTRIBUTE_TYPE = 'AttributeType';
    const EXAMPLE_VALUE = 'ExampleValue';
    const OPTIONS = 'Options';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::NAME => self::TYPE_STRING,
        self::LABEL => self::TYPE_STRING,
        self::IS_MANDATORY => self::TYPE_BOOL,
        self::DESCRIPTION => self::TYPE_STRING,
        self::ATTRIBUTE_TYPE => self::TYPE_STRING,
        self::EXAMPLE_VALUE => self::TYPE_STRING,
        self::OPTIONS => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->data[self::NAME];
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->data[self::LABEL];
    }

    /**
     * @return bool
     */
    public function isMandatory()
    {
        return (bool) $this->data[self::IS_MANDATORY];
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data[self::DESCRIPTION];
    }
    /**
     * @return string
     */
    public function getAttributeType()
    {
        return $this->data[self::ATTRIBUTE_TYPE];
    }
    /**
     * @return string
     */
    public function getExampleValue()
    {
        return $this->data[self::EXAMPLE_VALUE];
    }
    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->data[self::OPTIONS];
    }
}
