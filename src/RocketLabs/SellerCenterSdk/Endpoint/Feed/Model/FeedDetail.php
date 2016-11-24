<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Feed\Model;

use RocketLabs\SellerCenterSdk\Core\Model\ModelAbstract;

/**
 * Class Feed
 */
class FeedDetail extends ModelAbstract
{
    const ERROR_AGGREGATOR_NAME   = 'Error';
    const WARNING_AGGREGATOR_NAME = 'Warning';
    const FEED_KEY                = 'Feed';
    const STATUS_KEY              = 'Status';
    const ACTION_KEY              = 'Action';
    const CREATION_DATE_KEY       = 'CreationDate';
    const UPDATED_DATE_KEY        = 'UpdatedDate';
    const SOURCE_KEY              = 'Source';
    const TOTAL_RECORDS_KEY       = 'TotalRecords';
    const PROCESSED_RECORDS_KEY   = 'ProcessedRecords';
    const FAILED_RECORDS_KEY      = 'FailedRecords';
    const FEED_ERRORS_KEY         = 'FeedErrors';
    const FEED_WARNINGS_KEY       = 'FeedWarnings';

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
        self::FEED_ERRORS_KEY => ErrorCollection::class,
        self::FEED_WARNINGS_KEY => WarningCollection::class,
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
     * @return ErrorCollection
     */
    public function getFeedErrors()
    {
        return empty($this->data[self::FEED_ERRORS_KEY]) ? array() : $this->data[self::FEED_ERRORS_KEY];
    }

    /**
     * @return WarningCollection
     */
    public function getFeedWarnings()
    {
        return empty($this->data[self::FEED_WARNINGS_KEY]) ? array() : $this->data[self::FEED_WARNINGS_KEY];
    }

    /**
     * @inheritdoc
     */
    protected function buildObjectFromDefinition($class, $data)
    {
        if ($class === ErrorCollection::class) {
            $errors = [];

            foreach ($data as $error) {
                $errors[] = new Error(is_array($error) ? $error : $data[static::ERROR_AGGREGATOR_NAME]);
            }

            return parent::buildObjectFromDefinition($class, $errors);
        }
        if ($class === WarningCollection::class) {
            $warnings = [];

            foreach ($data as $warning) {
                $warnings[] = new Warning(is_array($warning) ? $warning : $data[static::WARNING_AGGREGATOR_NAME]);
            }

            return parent::buildObjectFromDefinition($class, $warnings);
        }

        return parent::buildObjectFromDefinition($class, $data);
    }
}
