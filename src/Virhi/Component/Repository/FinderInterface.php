<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:10
 */

namespace Virhi\Component\Repository;

use Virhi\Component\Search\SearchInterface;

interface FinderInterface
{
    /**
     * @param SearchInterface $search
     * @return mixed
     */
    public function find(SearchInterface $search);
} 