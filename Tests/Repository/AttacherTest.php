<?php
/**
 * Created by PhpStorm.
 * User: virhi
 * Date: 17/12/2014
 * Time: 00:18
 */

namespace Virhi\Component\Tests\Repository;

use Virhi\Component\Repository\Attacher;

class AttacherTest extends \PHPUnit_Framework_TestCase
{
    public function testAttach()
    {

        $doctrine = $this->getMockBuilder('\Symfony\Bridge\Doctrine\RegistryInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $entityManager = $this->getMockBuilder('\Doctrine\ORM\EntityManagerInterface')
            ->disableOriginalConstructor()
            ->setMethods(array('persist', 'flush'))
            ->getMock();

        $entityManager->expects($this->once())
            ->method('persist')
            ->will($this->returnValue(null));

        $entityManager->expects($this->once())
            ->method('flush')
            ->will($this->returnValue(null));

        $attacher = new Attacher($doctrine, $entityManager);
        $attacher->attach('toto');
    }
} 