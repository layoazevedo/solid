<?php

namespace LayoAzevedo\Test;

use PHPUnit_Framework_TestCase;
use LayoAzevedo\OpenClosed\Model\FabricaMotor;

class OpenClosedTest extends PHPUnit_Framework_TestCase
{
    private $motor;

    public function setUp()
    {
        $this->motor = new FabricaMotor();
    }

    /**
     * @test
     */
    public function fabricarMotorCarro()
    {
        $mockMotor = $this->getMock(
            'LayoAzevedo\OpenClosed\Model\Carro', 
            array('tipo')
        );
        
        $mockMotor->expects($this->once())
             ->method('tipo')
             ->will(
                $this->returnValue('Motor tipo 2.0 16V')
            );

        $this->assertEquals('Motor tipo 2.0 16V', $this->motor->fabricar($mockMotor));
    }

    /**
     * @test
     */
    public function fabricarMotorCaminhao()
    {
        $mockMotor = $this->getMock(
            'LayoAzevedo\OpenClosed\Model\Caminhao', 
            array('tipo')
        );
        
        $mockMotor->expects($this->once())
             ->method('tipo')
             ->will(
                $this->returnValue('Motor Volvo 220cv')
            );

        $this->assertEquals('Motor Volvo 220cv', $this->motor->fabricar($mockMotor));
    }
}
