<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:12
 */

namespace Virhi\Component\Repository;


interface AttacherInterface extends RepositoryInterface
{
    public function attach($entity);
} 