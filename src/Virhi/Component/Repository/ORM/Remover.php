<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 08/12/2014
 * Time: 19:17
 */

namespace Virhi\Component\Repository\ORM;


use Virhi\Component\Repository\RemoverInterface;

class Remover extends Repository implements RemoverInterface
{
    public function remove($entity)
    {
        $this->entiteManager->remove($entity);
        $this->entiteManager->flush();
    }
} 