<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 07/10/2014
 * Time: 15:41
 */

namespace Virhi\Component\Repository;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class Repository implements RepositoryInterface
{
    /**
     * @var RegistryInterface
     */
    protected $doctrine;

    /**
     * @var EntityManagerInterface
     */
    protected $entiteManager;

    function __construct(RegistryInterface $doctrine, EntityManagerInterface $entiteManager)
    {
        $this->doctrine      = $doctrine;
        $this->entiteManager = $entiteManager;
    }


    /**
     * @return RegistryInterface
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntiteManager()
    {
        return $this->entiteManager;
    }
}