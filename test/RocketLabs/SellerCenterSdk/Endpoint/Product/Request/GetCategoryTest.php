<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request;


use RocketLabs\SellerCenterSdk\Endpoint\Product\Response\GetCategoryTree as GetCategoryTreeResponse;

class GetCategoryTest extends \PHPUnit_Framework_TestCase
{

    public function testClassName()
    {
        $var = new GetCategoryTree();
        $this->assertEquals(GetCategoryTreeResponse::class, $var->getResponseClassName());
    }
}
