<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Timestamp;

/**
 * Class TimestampFormatter
 */
class TimestampFormatter implements TimestampFormatterInterface
{

    /**
     * @param \DateTimeInterface|null $time
     * @return string
     */
    public function getFormattedTimestamp(\DateTimeInterface $time = null)
    {
        if ($time === null) {
            $time = new \DateTime();
        }

        return $time->format(\DateTime::ISO8601);
    }
}
