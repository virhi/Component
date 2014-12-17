<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 17/12/2014
 * Time: 08:51
 */

namespace Virhi\Component\Tests\Repository;

use Virhi\Component\Repository\Remover;

class RemoverTest extends \PHPUnit_Framework_TestCase
{
    public function testRemove()
    {
        $doctrine = $this->getMockBuilder('\Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->getMock();

        $entityManager = $this->getMockBuilder('\Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->setMethods(array('remove', 'flush'))
            ->getMock();

        $entityManager->expects($this->once())
            ->method('remove')
            ->will($this->returnValue(null));

        $entityManager->expects($this->once())
            ->method('flush')
            ->will($this->returnValue(null));

        $remover = new Remover($doctrine, $entityManager);
        $remover->remove('dummy');
    }
} 