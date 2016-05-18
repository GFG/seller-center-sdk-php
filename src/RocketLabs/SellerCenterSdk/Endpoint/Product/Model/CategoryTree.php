<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Model;


use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

class CategoryTree extends ModelAbstract
{

    const NAME = "Name";
    const CATEGORYID = "CategoryId";
    const GLOBALIDENTIFIER = "GlobalIdentifier";
    const CHILDREN = "Children";

    protected $fieldDefinition = [
        self::NAME =>  self::TYPE_STRING,
        self::CATEGORYID => self::TYPE_STRING,
        self::GLOBALIDENTIFIER => self::TYPE_STRING
    ];

    const CATEGORY = 'Category';

    public function __construct(array $data)
    {
        parent::__construct($data);

        $collection = new CategoryTreeCollection();
        if (isset($data[self::CHILDREN][self::CATEGORY]['Name'])) {
            // in case of a single category
            $collection->add(new CategoryTree($data[self::CHILDREN][self::CATEGORY]));
        } else {
            foreach ($data[self::CHILDREN][self::CATEGORY] as $child) {
                $collection->add(new CategoryTree($child));
            }
        }

        $this->data[self::CHILDREN] = $collection;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->data[self::NAME];
    }

    /**
     * @return string
     */
    public function getCategoryId() {
        return $this->data[self::CATEGORYID];
    }

    /**
     * @return string
     */
    public function getGlobalIdentifier() {
        return $this->data[self::GLOBALIDENTIFIER];
    }

    /**
     * @return CategoryTreeCollection
     */
    public function getChildren() {
        return $this->data[self::CHILDREN];
    }

}
