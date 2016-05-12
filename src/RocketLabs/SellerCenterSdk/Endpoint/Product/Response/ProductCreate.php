<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Product;

/**
 * Class ProductCreate
 */
class ProductCreate extends GenericResponse
{
    const PRODUCT_KEY = 'Product';

    /**
     * @var Product
     */
    private $product;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        if (isset($this->body[static::PRODUCT_KEY])) {
            $this->product = new Product($this->body[static::PRODUCT_KEY]);
        }
    }
}
