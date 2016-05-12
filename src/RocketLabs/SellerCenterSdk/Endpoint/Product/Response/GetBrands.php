<?php
namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;

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
        if (isset($this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY][Item::ORDER_ITEM_ID])) {
            return [new Item($this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY])];
        }

        return array_map(
            function ($orderData) {
                return new Item($orderData);
            },
            $this->body[static::ORDER_ITEMS_KEY][static::ORDER_ITEM_KEY]
        );
    }
}
