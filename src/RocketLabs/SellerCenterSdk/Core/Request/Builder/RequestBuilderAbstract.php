<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\RequestBuilderInterface;

/**
 * Class RequestBuilderAbstract
 */
abstract class RequestBuilderAbstract implements RequestBuilderInterface
{

    /**
     * @param mixed $object
     * @return array
     */
    protected function convertToArray($object)
    {

        $data = get_object_vars($object);

        foreach ($data as $property => $value) {
            // Let's convert every value to a raw value for the request
            if ($value instanceof \DateTimeInterface) {
                $value = $value->format(\DateTime::ISO8601);
            } elseif (is_object($value)) {
                $value = $this->convertToArray($value);
            }

            // The following two lines will convert the property to a valid property for the request data and assign the
            // processed value
            unset($data[$property]);

            $data[ucfirst($property)] = $value;
        }

        return $data;
    }
}
