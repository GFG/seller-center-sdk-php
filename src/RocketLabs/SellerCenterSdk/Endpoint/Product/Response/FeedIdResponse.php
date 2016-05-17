<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Product\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;

/**
 * Class FeedIdResponse
 */
class FeedIdResponse extends GenericResponse
{
    const REQUEST_ID_KEY = 'RequestId';

    /**
     * @var string
     */
    private $feedId;

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $this->feedId = $this->head[self::REQUEST_ID_KEY];
    }

    /**
     * @return string
     */
    public function getFeedId()
    {
        return $this->feedId;
    }
}
