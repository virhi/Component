<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:26
 */

namespace Virhi\Component\Search;

use Virhi\Component\Collection\CollectionInterface;

interface SearchInterface
{
    /**
     * @return CollectionInterface
     */
    public function getOrders();

    /**
     * @return CollectionInterface
     */
    public function getLimits();

    /**
     * @return CollectionInterface
     */
    public function getFilters();

    public function  getHydratation();
} 