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

    /** @var \DateTime */
    protected $createdAfter;

    /** @var \DateTime */
    protected $createdBefore;

    /** @var \DateTime */
    protected $updatedAfter;

    /** @var \DateTime */
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
     * @param \DateTime $createdAfter
     * @return $this
     */
    public function setCreatedAfter(\DateTime $createdAfter)
    {
        $this->createdAfter = $createdAfter;
        return $this;
    }

    /**
     * @param \DateTime $createdBefore
     * @return $this
     */
    public function setCreatedBefore(\DateTime $createdBefore)
    {
        $this->createdBefore = $createdBefore;
        return $this;
    }

    /**
     * @param \DateTime $updatedAfter
     * @return $this
     */
    public function setUpdatedAfter(\DateTime $updatedAfter)
    {
        $this->updatedAfter = $updatedAfter;
        return $this;
    }

    /**
     * @param \DateTime $updatedBefore
     * @return $this
     */
    public function setUpdatedBefore(\DateTime $updatedBefore)
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
