<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class CategoryTree
 */
class Category extends ModelAbstract
{

    const NAME = 'Name';
    const CATEGORY_ID = 'CategoryId';
    const GLOBAL_IDENTIFIER = 'GlobalIdentifier';
    const CHILDREN = 'Children';
    const CATEGORY = 'Category';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::NAME =>  self::TYPE_STRING,
        self::CATEGORY_ID => self::TYPE_STRING,
        self::GLOBAL_IDENTIFIER => self::TYPE_STRING
    ];

    /**
     * CategoryTree constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        $collection = new CategoryCollection();
        if (isset($data[self::CHILDREN][self::CATEGORY][self::NAME])) {
            // in case of a single category
            $collection->add(new Category($data[self::CHILDREN][self::CATEGORY]));
        } elseif (isset($data[self::CHILDREN][self::CATEGORY])) {
            foreach ($data[self::CHILDREN][self::CATEGORY] as $child) {
                $collection->add(new Category($child));
            }
        }

        $this->data[self::CHILDREN] = $collection;
    }

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
    public function getCategoryId()
    {
        return $this->data[self::CATEGORY_ID];
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier()
    {
        return $this->data[self::GLOBAL_IDENTIFIER];
    }

    /**
     * @return CategoryCollection
     */
    public function getChildren()
    {
        return $this->data[self::CHILDREN];
    }

}
