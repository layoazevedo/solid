<?php

namespace LayoAzevedo\Test;

use PHPUnit_Framework_TestCase;
use LayoAzevedo\InterfaceSegregation\Model\Moto;

class InterfaceSegregationTest extends PHPUnit_Framework_TestCase
{
    private $veiculo;

    public function setUp()
    {
        $this->veiculo = new Moto();
    }

    /**
     * @test
     */
    public function combustivelMoto()
    {
        $this->assertEquals('Gasolina', $this->veiculo->combustivel());
    }
}
