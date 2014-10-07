<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 16:32
 */

namespace Virhi\Component\Query;

use Virhi\Component\Query\Context\ContextInterface;

interface QueryInterface
{
    public function execute(ContextInterface $context);
} 