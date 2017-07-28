<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Response;

use RocketLabs\SellerCenterSdk\Core\Response\GenericResponse;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\Comment;
use RocketLabs\SellerCenterSdk\Endpoint\Order\Model\CommentCollection;

/**
 * Class GetOrderComments
 */
class GetOrderComments extends GenericResponse
{
    const ORDER_COMMENT_KEY = 'Comment';
    const ORDER_COMMENTS_KEY = 'Comments';

    /** @var  CommentCollection */
    private $comments;

    /**
     * @return CommentCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param array $responseData
     */
    protected function processDecodedResponse(array $responseData)
    {
        parent::processDecodedResponse($responseData);

        $comments = [];
        if (isset($this->body[static::ORDER_COMMENTS_KEY])) {
            $comments = $this->prepareOrderComments();
        }

        $this->comments = new CommentCollection($comments);
    }

    /**
     * @return Comment[]
     */
    protected function prepareOrderComments()
    {
        if (isset($this->body[static::ORDER_COMMENTS_KEY][static::ORDER_COMMENT_KEY][Comment::ORDER_COMMENT_ID])) {
            return [new Comment($this->body[static::ORDER_COMMENTS_KEY][static::ORDER_COMMENT_KEY])];
        }

        return array_map(
            function ($orderData) {
                return new Comment($orderData);
            },
            $this->body[static::ORDER_COMMENTS_KEY][static::ORDER_COMMENT_KEY]
        );
    }
}
