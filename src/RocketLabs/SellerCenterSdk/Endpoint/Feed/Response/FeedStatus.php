<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\FeedDetail;

/**
 * Class FeedStatus
 */
class FeedStatus extends GenericResponse
{
    const FEED_DETAIL_KEY = 'FeedDetail';

    /** @var FeedDetail  */
    private $feedDetail;

    /**
     * @return FeedDetail
     */
    public function getFeedDetail()
    {
        return $this->feedDetail;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $this->feedDetail = $this->prepareFeedDetail();
    }

    /**
     * @return FeedDetail
     */
    protected function prepareFeedDetail()
    {
        return new FeedDetail($this->body[static::FEED_DETAIL_KEY]);
    }
}
