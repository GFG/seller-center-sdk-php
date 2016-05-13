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
        return array_map(
            function ($value) {
                if ($value instanceof \DateTime) {
                    $value = $value->format(\DateTime::ISO8601);
                } elseif (is_object($value)) {
                    $value = $this->convertToArray($value);
                }

                return $value;
            },
            get_object_vars($object)
        );
    }
}
