<?php

namespace LayoAzevedo\Test;

use PHPUnit_Framework_TestCase;
use LayoAzevedo\LiskovSubstitution\Model\Dirigir;

class LiskovSubstitutionTest extends PHPUnit_Framework_TestCase
{
    private $veiculo;

    public function setUp()
    {
        $this->veiculo = new Dirigir();
    }

    /**
     * @test
     */
    public function ligarCarro()
    {
        $mockVeiculo = $this->getMock(
            'LayoAzevedo\LiskovSubstitution\Model\Carro', 
            array('ligarMotor')
        );

        $mockVeiculo->expects($this->once())
             ->method('ligarMotor')
             ->will(
                $this->returnValue('Ligando carro')
            );

        $this->assertEquals('Ligando carro', $this->veiculo->executar($mockVeiculo));
    }

    /**
     * @test
     */
    public function ligarOnibusEletrico()
    {
        $mockVeiculo = $this->getMock(
            'LayoAzevedo\LiskovSubstitution\Model\OnibusEletrico', 
            array('ligarMotor')
        );

        $mockVeiculo->expects($this->once())
             ->method('ligarMotor')
             ->will(
                $this->returnValue('Ligando Veiculo')
            );

        $this->assertEquals('Ligando Veiculo', $this->veiculo->executar($mockVeiculo));
    }
}
