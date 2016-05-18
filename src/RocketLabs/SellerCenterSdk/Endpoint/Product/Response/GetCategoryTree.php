<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;


use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\CategoryTree;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\CategoryTreeCollection;

class GetCategoryTree extends GenericResponse
{

    const CATEGORIES = "Categories";
    const CATEGORY = 'Category';

    /**
     * @var CategoryTreeCollection
     */
    private $categories;

    public function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $this->categories = new CategoryTreeCollection();

        if (isset($this->getBody()[self::CATEGORIES][self::CATEGORY])) {
            foreach($this->getBody()[self::CATEGORIES][self::CATEGORY] as $category) {
                $this->categories->add(new CategoryTree($category));
            }
        }
    }

    /**
     * @return CategoryTreeCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

}
