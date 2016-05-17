<?php

namespace RocketLabs\SellerCenterSdk\Core\Response;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;
use RocketLabs\SellerCenterSdk\Core\Exception\ApiException;

/**
 * Class Factory
 */
class Factory
{
    const HTTP_CODE_200 = 200;

    /**
     * @param HttpResponseInterface $httpResponse
     * @param string $class class name
     * @return GenericResponse
     */
    public function buildResponse(HttpResponseInterface $httpResponse, $class = GenericResponse::class)
    {
        if ($httpResponse->getStatusCode() !== self::HTTP_CODE_200) {
            throw new ApiException(ApiException::UNEXPECTED_RESPONSE, $httpResponse->getStatusCode());
        }

        $decodedResponse = $this->decodeJsonResponse((string)$httpResponse->getBody());

        if ($decodedResponse === null) {
            throw new ApiException(ApiException::INVALID_RESPONSE_BODY, $httpResponse->getStatusCode());
        }

        $envelope = key($decodedResponse);

        if ($envelope == ResponseInterface::RESPONSE_TYPE_ERROR) {
            return new ErrorResponse($decodedResponse[$envelope]);
        }

        return new $class($decodedResponse[$envelope]);
    }

    /**
     * @param string $apiResponseBody
     *
     * @return array|null
     */
    protected function decodeJsonResponse($apiResponseBody)
    {
        $jsonDecoded = json_decode($apiResponseBody, true);

        // Only array could be valid api response
        if (is_array($jsonDecoded)) {
            return $jsonDecoded;
        }

        return null;
    }
}
