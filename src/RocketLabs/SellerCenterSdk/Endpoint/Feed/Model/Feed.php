<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Feed
 */
class Feed extends ModelAbstract
{
    const FEED_KEY = 'Feed';
    const STATUS_KEY = 'Status';
    const ACTION_KEY = 'Action';
    const CREATION_DATE_KEY = 'CreationDate';
    const UPDATED_DATE_KEY = 'UpdatedDate';
    const SOURCE_KEY = 'Source';
    const TOTAL_RECORDS_KEY = 'TotalRecords';
    const PROCESSED_RECORDS_KEY = 'ProcessedRecords';
    const FAILED_RECORDS_KEY = 'FailedRecords';
    const FAILURE_REPORTS_KEY = 'FailureReports';

    /**
     * @var array
     */
    protected $fieldDefinition = [
        self::FEED_KEY => self::TYPE_STRING,
        self::STATUS_KEY => self::TYPE_STRING,
        self::ACTION_KEY => self::TYPE_STRING,
        self::CREATION_DATE_KEY => self::TYPE_DATETIME,
        self::UPDATED_DATE_KEY => self::TYPE_DATETIME,
        self::SOURCE_KEY => self::TYPE_STRING,
        self::TOTAL_RECORDS_KEY => self::TYPE_INT,
        self::PROCESSED_RECORDS_KEY => self::TYPE_INT,
        self::FAILED_RECORDS_KEY => self::TYPE_INT,
        self::FAILURE_REPORTS_KEY => FailureReport::class,
    ];

    /**
     * @return string
     */
    public function getFeed()
    {
        return $this->data[self::FEED_KEY];
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->data[self::STATUS_KEY];
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->data[self::ACTION_KEY];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->data[self::CREATION_DATE_KEY];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedDate()
    {
        return $this->data[self::UPDATED_DATE_KEY];
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->data[self::SOURCE_KEY];
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
        return $this->data[self::TOTAL_RECORDS_KEY];
    }

    /**
     * @return int
     */
    public function getProcessedRecords()
    {
        return $this->data[self::PROCESSED_RECORDS_KEY];
    }

    /**
     * @return int
     */
    public function getFailedRecords()
    {
        return $this->data[self::FAILED_RECORDS_KEY];
    }

    /**
     * @return FailureReport
     */
    public function getFailureReports()
    {
        return $this->data[self::FAILURE_REPORTS_KEY];
    }
}
