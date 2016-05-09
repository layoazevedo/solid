<?php

namespace LayoAzevedo\Test;

use PHPUnit_Framework_TestCase;
use LayoAzevedo\DependencyInversion\Model\Consumidor;

class DependencyInversionTest extends PHPUnit_Framework_TestCase
{
    private $consumidor;

    public function setUp()
    {
        $mockBar = $this->getMock(
            'LayoAzevedo\DependencyInversion\Model\Bar', 
            array('cerveja', 'refrigerante')
        );

        $mockBar->expects($this->any())
            ->method('cerveja')
            ->will(
                $this->returnValue(
                    'Bebendo cerveja'
                )
            );

        $mockBar->expects($this->any())
            ->method('refrigerante')
            ->will(
                $this->returnValue(
                    'Bebendo refrigerante'
                )
            );

        $this->consumidor = new Consumidor($mockBar);
    }

    /**
     * @test
     */
    public function verificaConsumidorMaiorIdade()
    {
        $this->assertEquals(
            'Bebendo cerveja', 
            $this->consumidor->beber(27)
        );
    }

    /**
     * @test
     */
    public function verificaConsumidorMenorIdade()
    {
        $this->assertEquals(
            'Bebendo refrigerante', 
            $this->consumidor->beber(17)
        );
    }
}
