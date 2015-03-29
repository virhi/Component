<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:49
 */

namespace Virhi\Component\Repository\ORM;

use Virhi\Component\Repository\FinderInterface;
use Virhi\Component\Search\SearchInterface;

class Finder extends Repository implements FinderInterface
{
    /**
     * @param SearchInterface $search
     * @return mixed
     */
    public function find(SearchInterface $search)
    {
        // TODO: Implement find() method.
    }

} 