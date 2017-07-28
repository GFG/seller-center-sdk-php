<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Comment
 */
class Comment extends ModelAbstract
{
    const COMMENT_ID = 'CommentId';
    const USERNAME = 'Username';
    const CONTENT = 'Content';
    const TYPE = 'Type';
    const IS_OPENED = 'IsOpened';
    const IS_ANSWERED = 'IsAnswered';
    const CREATED_AT = 'CreatedAt';
    const UPDATED_AT= 'UpdatedAt';
    const COMMENTS = 'Comments';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::COMMENT_ID => self::TYPE_INT,
        self::USERNAME => self::TYPE_STRING,
        self::CONTENT => self::TYPE_STRING,
        self::TYPE => self::TYPE_STRING,
        self::IS_OPENED => self::TYPE_BOOL,
        self::IS_ANSWERED => self::TYPE_BOOL,
        self::CREATED_AT => self::TYPE_DATETIME,
        self::UPDATED_AT=> self::TYPE_DATETIME,
        self::COMMENTS => CommentCollection::class,
    ];

    /**
     * @return int
     */
    public function getCommentId()
    {
        return $this->data[self::COMMENT_ID];
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->data[self::USERNAME];
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->data[self::CONTENT];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->data[self::TYPE];
    }

    /**
     * @return boolean
     */
    public function isOpened()
    {
        return $this->data[self::IS_OPENED];
    }

    /**
     * @return boolean
     */
    public function isAnswered()
    {
        return $this->data[self::IS_ANSWERED];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->data[self::CREATED_AT];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->data[self::UPDATED_AT];
    }

    /**
     * @return CommentCollection
     */
    public function getComments()
    {
        return (isset($this->data[self::COMMENTS]) ? $this->data[self::COMMENTS] : []);
    }

    /**
     * @inheritdoc
     */
    protected function buildObjectFromDefinition($class, $data)
    {
        if ($class === CommentCollection::class) {
            $errors = [];

            foreach ($data as $error) {
                $errors[] = new Comment(is_array($error) ? $error : $data[static::COMMENTS]);
            }

            return parent::buildObjectFromDefinition($class, $errors);
        }

        return parent::buildObjectFromDefinition($class, $data);
    }
}
