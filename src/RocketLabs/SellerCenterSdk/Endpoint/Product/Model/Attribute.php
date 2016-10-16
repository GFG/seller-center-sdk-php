<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute\Option;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute\OptionCollection;

/**
 * Class Attribute
 */
class Attribute extends ModelAbstract
{

    const OPTION_AGGREGATOR_NAME = 'Option';
    const NAME                   = 'Name';
    const LABEL                  = 'Label';
    const IS_MANDATORY           = 'isMandatory';
    const DESCRIPTION            = 'Description';
    const ATTRIBUTE_TYPE         = 'AttributeType'; // Possibly Values 'option', 'value', 'system'
    const EXAMPLE_VALUE          = 'ExampleValue';
    const OPTIONS                = 'Options';
    const IS_GLOBAL_ATTRIBUTE    = 'IsGlobalAttribute';
    const GLOBAL_IDENTIFIER      = 'GlobalIdentifier';
    const FEED_NAME              = 'FeedName';
    const PRODUCT_TYPE           = 'ProductType'; // 'config', 'simple', '', 'sellercenter'
    const INPUT_TYPE             = 'InputType'; // Possibly Values 'multiselect', 'dropdown', 'textfield', 'numberfield', 'datetime', 'textarea', '' (TaxClass uses empty value)

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::NAME                => self::TYPE_STRING,
        self::LABEL               => self::TYPE_STRING,
        self::IS_MANDATORY        => self::TYPE_BOOL,
        self::DESCRIPTION         => self::TYPE_STRING,
        self::ATTRIBUTE_TYPE      => self::TYPE_STRING,
        self::EXAMPLE_VALUE       => self::TYPE_STRING,
        self::OPTIONS             => OptionCollection::class,
        self::IS_GLOBAL_ATTRIBUTE => self::TYPE_BOOL,
        self::GLOBAL_IDENTIFIER   => self::TYPE_STRING,
        self::FEED_NAME           => self::TYPE_STRING,
        self::PRODUCT_TYPE        => self::TYPE_STRING,
        self::INPUT_TYPE          => self::TYPE_STRING,
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
    public function getFeedName()
    {
        return $this->data[self::FEED_NAME];
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier()
    {
        return $this->data[self::GLOBAL_IDENTIFIER];
    }

    /**
     * @return string
     */
    public function isGlobalAttribute()
    {
        return (bool) $this->data[self::IS_GLOBAL_ATTRIBUTE];
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
    public function getInputType()
    {
        return $this->data[self::INPUT_TYPE];
    }
    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->data[self::PRODUCT_TYPE];
    }
    /**
     * @return string
     */
    public function getExampleValue()
    {
        return $this->data[self::EXAMPLE_VALUE];
    }
    /**
     * @return OptionCollection[]
     */
    public function getOptions()
    {
        return $this->data[self::OPTIONS];
    }

    /**
     * @inheritdoc
     */
    protected function buildObjectFromDefinition($class, $data)
    {

        if ($class === OptionCollection::class) {
            $options = [];
            foreach ($data[static::OPTION_AGGREGATOR_NAME] as $option) {
                $options[] = new Option(is_array($option) ? $option : $data[static::OPTION_AGGREGATOR_NAME]);
            }

            return parent::buildObjectFromDefinition($class, $options);
        }

        return parent::buildObjectFromDefinition($class, $data);
    }
}
