<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 27/10/2014
 * Time: 19:15
 */

namespace Virhi\Component\Command;

use Virhi\Component\Command\Context\ContextInterface;

interface CommandInterface
{
    public function execute(ContextInterface $context);
} 