<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\Feed;
use RocketLabs\SellerCenterSdk\Endpoint\Feed\Model\FeedCollection;

/**
 * Class FeedList
 */
class FeedList extends GenericResponse
{
    const FEED_KEY = 'Feed';

    /** @var FeedCollection  */
    private $feeds;

    /**
     * @return FeedCollection
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $feeds = [];
        if (isset($this->body[static::FEED_KEY])) {
            $feeds = $this->prepareFeeds();
        }

        $this->feeds = new FeedCollection($feeds);
    }

    /**
     * @return Feed[]
     */
    protected function prepareFeeds()
    {
        if (isset($this->body[static::FEED_KEY][Feed::FEED_KEY])) {
            return [new Feed($this->body[static::FEED_KEY])];
        }

        return array_map(
            function (array $feedData) {
                return new Feed($feedData);
            },
            $this->body[static::FEED_KEY]
        );
    }
}
