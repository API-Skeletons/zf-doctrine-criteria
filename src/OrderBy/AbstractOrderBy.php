<?php

namespace ZF\Doctrine\Criteria\OrderBy;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Common\Collections\Criteria;
use ZF\Doctrine\Criteria\OrderBy\OrderByInterface;
use ZF\Doctrine\Criteria\OrderBy\Service\OrderByManager;

abstract class AbstractOrderBy implements OrderByInterface
{
    abstract public function orderBy(Criteria $criteria, ClassMetadata $metadata, array $option);

    protected $orderByManager;

    public function __construct($params)
    {
        $this->setOrderByManager($params[0]);
    }

    public function setOrderByManager(OrderByManager $orderByManager)
    {
        $this->orderByManager = $orderByManager;

        return $this;
    }

    public function getOrderByManager()
    {
        return $this->orderByManager;
    }
}
