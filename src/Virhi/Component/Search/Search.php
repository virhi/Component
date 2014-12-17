<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 16:14
 */

namespace Virhi\Component\Search;


use Virhi\Component\Collection\CollectionInterface;
use Doctrine\ORM\AbstractQuery;

class Search implements SearchInterface
{
    /**
     * @var CollectionInterface
     */
    protected $orders;

    /**
     * @var CollectionInterface
     */
    protected $limits;

    /**
     * @var CollectionInterface
     */
    protected $filters;

    protected $hydratation;

    function __construct()
    {
        $this->hydratation = AbstractQuery::HYDRATE_ARRAY;
    }

    public function addFilter($filter)
    {
        $this->getFilters()->getList()->append($filter);
    }

    public function addLimit($limit)
    {
        $this->getLimits()->getList()->append($limit);
    }

    public function addOrder($order)
    {
        $this->getOrders()->getList()->append($order);
    }


    /**
     * @return CollectionInterface
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @return CollectionInterface
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * @return CollectionInterface
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @return mixed
     */
    public function getHydratation()
    {
        return $this->hydratation;
    }

    /**
     * @param mixed $hydratation
     */
    public function setHydratation($hydratation)
    {
        $this->hydratation = $hydratation;
    }


}