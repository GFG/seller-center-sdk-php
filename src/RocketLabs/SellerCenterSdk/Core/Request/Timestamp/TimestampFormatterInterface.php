<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Timestamp;

interface TimestampFormatterInterface
{

    /**
     * @param \DateTime|null $time
     * @return string
     */
    public function getFormattedTimestamp(\DateTime $time = null);
}
