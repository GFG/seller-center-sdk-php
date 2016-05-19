<?php
/**
 * Created by PhpStorm.
 * User: obzota
 * Date: 18.05.16
 * Time: 11:57
 */

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;


use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\CategoryTreeCollection;

/**
 * Class GetCategoryTreeTest
 * @package RocketLabs\SellerCenterSdk\Endpoint\Product\Response
 */
class GetCategoryTreeTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $var = new GetCategoryTree([
            'Head' => [],
            'Body' => [
                'Categories' => [
                    'Category' => [
                        []
                    ]
                ]
            ]
        ]);

        $this->assertInstanceOf(CategoryTreeCollection::class, $var->getCategories());
    }

}
