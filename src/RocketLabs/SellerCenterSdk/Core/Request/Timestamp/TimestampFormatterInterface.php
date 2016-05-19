<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Timestamp;

/**
 * Interface TimestampFormatterInterface
 */
interface TimestampFormatterInterface
{

    /**
     * @param \DateTimeInterface|null $time
     * @return string
     */
    public function getFormattedTimestamp(\DateTimeInterface $time = null);
}
