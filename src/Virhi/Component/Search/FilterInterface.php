<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:37
 */

namespace Virhi\Component\Search;


interface FilterInterface
{
    /**
     * @return string
     */
    public function getField();

    /**
     * @return string|int\Null
     */
    public function getValue();

    public function getMode();

    public function getExpr();
} 