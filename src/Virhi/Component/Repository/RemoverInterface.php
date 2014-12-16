<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 08/12/2014
 * Time: 19:18
 */

namespace Virhi\Component\Repository;



interface RemoverInterface extends RepositoryInterface
{
    public function remove($entity);
}