<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Document
 */
class Document extends ModelAbstract
{
    const DOCUMENT_TYPE_KEY = 'DocumentType';
    const MIME_TYPE_KEY = 'MimeType';
    const FILE_KEY = 'File';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::DOCUMENT_TYPE_KEY => self::TYPE_STRING,
        self::MIME_TYPE_KEY => self::TYPE_STRING,
        self::FILE_KEY => self::TYPE_STRING,
    ];

    /**
     * @return string
     */
    public function getType()
    {
        return $this->data[self::DOCUMENT_TYPE_KEY];
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->data[self::MIME_TYPE_KEY];
    }

    /**
     * @return string
     */
    public function getRawFile()
    {
        return $this->data[self::FILE_KEY];
    }
}
