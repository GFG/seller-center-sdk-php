<?php

namespace RocketLabs\SellerCenterSdk\Core\Request\Builder;

use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;
use RocketLabs\SellerCenterSdk\Core\Request\RequestBuilderInterface;

/**
 * Class ListRequestBuilderAbstract
 */
abstract class ListRequestBuilderAbstract implements RequestBuilderInterface
{
    /** @var array */
    protected $validSortFields = [];

    /** @var array */
    protected $validSortDirections = ['ASC', 'DESC'];

    /** @var \DateTimeInterface */
    protected $createdAfter;

    /** @var \DateTimeInterface */
    protected $createdBefore;

    /** @var \DateTimeInterface */
    protected $updatedAfter;

    /** @var \DateTimeInterface */
    protected $updatedBefore;

    /** @var int */
    protected $limit;

    /** @var int */
    protected $offset;

    /**
     * @return GenericRequest
     */
    abstract public function build();

    /**
     * @param \DateTimeInterface $createdAfter
     * @return $this
     */
    public function setCreatedAfter(\DateTimeInterface $createdAfter)
    {
        $this->createdAfter = $createdAfter;
        return $this;
    }

    /**
     * @param \DateTimeInterface $createdBefore
     * @return $this
     */
    public function setCreatedBefore(\DateTimeInterface $createdBefore)
    {
        $this->createdBefore = $createdBefore;
        return $this;
    }

    /**
     * @param \DateTimeInterface $updatedAfter
     * @return $this
     */
    public function setUpdatedAfter(\DateTimeInterface $updatedAfter)
    {
        $this->updatedAfter = $updatedAfter;
        return $this;
    }

    /**
     * @param \DateTimeInterface $updatedBefore
     * @return $this
     */
    public function setUpdatedBefore(\DateTimeInterface $updatedBefore)
    {
        $this->updatedBefore = $updatedBefore;
        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = (int)$limit;
        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = (int)$offset;
        return $this;
    }
}
