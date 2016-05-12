<?php
namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Brand;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\BrandCollection;

class GetBrands extends GenericResponse
{
    const BRANDS_KEY = 'Brands';
    const BRAND_KEY = 'Brand';

    /** @var BrandCollection  */
    private $brands;

    /**
     * @return BrandCollection
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        if (isset($this->body[static::BRANDS_KEY])) {
            $this->items = new BrandCollection(
                $this->prepareBrands()
            );
        }
    }

    /**
     * @return Brand[]
     */
    protected function prepareBrands()
    {
        if (isset($this->body[static::BRANDS_KEY][static::BRAND_KEY][Brand::NAME_KEY])) {
            return [new Brand($this->body[static::BRANDS_KEY][static::BRAND_KEY])];
        }

        return array_map(
            function ($orderData) {
                return new Brand($orderData);
            },
            $this->body[static::BRANDS_KEY][static::BRAND_KEY]
        );
    }
}
