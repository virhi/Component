<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:38
 */

namespace Virhi\Component\Collection;


class Collection implements CollectionInterface
{
    protected $list;


    function __construct(array $list = array())
    {
        $this->list = new \ArrayObject($list);
    }

    /**
     * @return \ArrayObject
     */
    public function getList()
    {
        return $this->list;
    }

}