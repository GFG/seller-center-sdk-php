<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetCategoryTree as GetCategoryTreeResponse;

/**
 * Class GetCategoryTest
 */
class GetCategoryTest extends \PHPUnit_Framework_TestCase
{

    public function testClassName()
    {
        $this->assertEquals(GetCategoryTreeResponse::class, (new GetCategoryTree())->getResponseClassName());
    }
}
