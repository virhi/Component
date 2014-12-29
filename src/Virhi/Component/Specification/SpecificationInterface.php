<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 29/12/14
 * Time: 13:02
 */

namespace Virhi\Component\Specification;

interface SpecificationInterface 
{
    /**
     *
     * @return boolean
     */
    public function isSatisfiedBy($obj);
} 