<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:09
 */

namespace Virhi\Component\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

interface RepositoryInterface
{
    /**
     * @return RegistryInterface
     */
    public function getDoctrine();

    /**
     * @return EntityManagerInterface
     */
    public function getEntiteManager();
}