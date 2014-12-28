<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 27/12/14
 * Time: 02:25
 */

namespace Virhi\Component\Collection;


class MetaDataCollection extends Collection
{
    protected $nbTotal;

    function __construct($nbTotal = 0, array $list = array())
    {
        parent::__construct($list);
        $this->nbTotal = $nbTotal;
    }

    /**
     * @return mixed
     */
    public function getNbTotal()
    {
        return $this->nbTotal;
    }

}