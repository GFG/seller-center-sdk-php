<?php

namespace RocketLabs\SellerCenterSdk\Core\Exception;

class TooManyRequestsException extends \RuntimeException
{
    const UNEXPECTED_RESPONSE = 'Unexpected response';
    const INVALID_RESPONSE_BODY = 'Invalid response body';
}
