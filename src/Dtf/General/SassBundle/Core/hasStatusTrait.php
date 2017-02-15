<?php

namespace Dtf\General\SassBundle\Core;

/**
 *
 * @author psyk3hoe
 */
trait hasStatusTrait
{
    /**
     *
     * @var int
     */
    protected $status;

    public static $statuses = [
        StatusInterface::STATUS_ACTIVE,
        StatusInterface::STATUS_INACTIVE,
        StatusInterface::STATUS_ARCHIVED,
    ];

    /**
     * Set status
     *
     * @param integer $status
     *
     * @throws TypeError
     */
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
}