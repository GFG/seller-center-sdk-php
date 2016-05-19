<?php
namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Brand;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\BrandCollection;

/**
 * Class GetBrands
 */
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

        $brands = [];
        if (isset($this->body[static::BRANDS_KEY])) {
            $brands = $this->prepareBrands();
        }

        $this->brands = new BrandCollection($brands);
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
            function (array $brandData) {
                return new Brand($brandData);
            },
            $this->body[static::BRANDS_KEY][static::BRAND_KEY]
        );
    }
}
