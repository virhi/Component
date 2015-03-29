<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:45
 */

namespace Virhi\Component\Repository\ORM;
use Virhi\Component\Repository\AttacherInterface;


class Attacher extends Repository implements AttacherInterface
{
    public function attach($entity)
    {
        $this->entiteManager->persist($entity);
        $this->entiteManager->flush();
    }
} 