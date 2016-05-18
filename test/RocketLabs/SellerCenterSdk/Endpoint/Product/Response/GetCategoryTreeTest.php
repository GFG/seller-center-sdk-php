<?php
/**
 * Created by PhpStorm.
 * User: obzota
 * Date: 18.05.16
 * Time: 11:57
 */

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;


use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\CategoryTreeCollection;

class GetCategoryTreeTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $var = new GetCategoryTree([
            'Head' => [],
            'Body' => []
        ]);

        $this->assertInstanceOf(CategoryTreeCollection::class, $var->getCategories());
    }

}
