<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Timestamp;

class TimestampFormatter implements TimestampFormatterInterface
{

    /**
     * @param \DateTime|null $time
     * @return string
     */
    public function getFormattedTimestamp(\DateTime $time = null)
    {
        if ($time === null) {
            $time = new \DateTime();
        }

        return $time->format(\DateTime::ISO8601);
    }
}
