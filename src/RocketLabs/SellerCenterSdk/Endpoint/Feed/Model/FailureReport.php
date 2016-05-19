<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class FailureReport
 */
class FailureReport extends ModelAbstract
{
    const MIME_TYPE_KEY = 'MimeType';
    const FILE_KEY = 'File';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::MIME_TYPE_KEY => self::TYPE_STRING,
        self::FILE_KEY => self::TYPE_STRING,
    ];

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
    public function getFile()
    {
        return $this->data[self::FILE_KEY];
    }
}
