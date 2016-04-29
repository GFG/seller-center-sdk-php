<?php

namespace RocketLabs\SellerCenterSdk\Core\Response;

/**
 * Interface ResponseInterface
 */
interface ResponseInterface
{
    const RESPONSE_TYPE_SUCCESS = 'SuccessResponse';
    const RESPONSE_TYPE_ERROR = 'ErrorResponse';

    const KEY_HEAD = 'Head';
    const KEY_BODY = 'Body';

    /**
     * @return \stdClass
     */
    public function getHead();

    /**
     * @return mixed
     */
    public function getBody();
}
