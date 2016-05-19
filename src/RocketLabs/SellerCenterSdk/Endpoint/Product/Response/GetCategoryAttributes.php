<?php
namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\Attribute;
use RocketLabs\SellerCenterSdk\Endpoint\Product\Model\AttributeCollection;

/**
 * Class GetCategoryAttributes
 */
class GetCategoryAttributes extends GenericResponse
{
    const ATTRIBUTE_KEY = 'Attribute';

    /**
     * @var AttributeCollection
     */
    private $attributes;

    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $attributes = [];
        if (isset($this->body[static::ATTRIBUTE_KEY])) {
            $attributes = $this->prepare();
        }

        $this->attributes = new AttributeCollection($attributes);
    }

    /**
     * @return Attribute[]
     */
    protected function prepare()
    {
        return array_map(
            function (array $data) {
                return new Attribute($data);
            },
            $this->body[static::ATTRIBUTE_KEY]
        );
    }
}
