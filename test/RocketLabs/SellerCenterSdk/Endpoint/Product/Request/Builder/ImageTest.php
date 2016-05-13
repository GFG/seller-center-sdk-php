<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Builder;

use RocketLabs\SellerCenterSdk\Endpoint\Product\Request\Image as ImageRequest;

/**
 * Class ImageTest
 */
class ImageTest extends \PHPUnit_Framework_TestCase
{
    const SKU = 'SellerSKU';

    /**
     * @dataProvider providerBuild
     * @param array $methods
     * @param ImageRequest $expectedRequest
     */
    public function testBuild(array $methods, ImageRequest $expectedRequest)
    {
        $builder = new Image(self::SKU);
        foreach ($methods as list($method, $values)) {
            call_user_func_array([$builder, $method], $values);
        }

        $this->assertEquals($expectedRequest, $builder->build());
    }

    /**
     * @return array
     */
    public function providerBuild()
    {
        return [
            'with couple of images' => [
                'methods' => [
                    ['addImage', ['http://images.com/img1.jpg']],
                    ['addImage', ['http://images.com/img2.jpg']],
                ],
                'request' => new ImageRequest(
                    self::SKU,
                    ['http://images.com/img1.jpg', 'http://images.com/img2.jpg']
                ),
            ]
        ];
    }
}
