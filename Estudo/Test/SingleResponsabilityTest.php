<?php

namespace LayoAzevedo\Test;

use PHPUnit_Framework_TestCase;
use LayoAzevedo\SingleResponsability\Model\PorteEmpresa;

class SingleResponsabilityTest extends PHPUnit_Framework_TestCase
{
    private $empresa;

    public function setUp()
    {
        $this->empresa = new PorteEmpresa();
    }

    /**
     * @test
     */
    public function porteEmpresaNacional()
    {
        $this->assertEquals('NACIONAL', $this->empresa->verificaPorte('pt-br'));
    }

    /**
     * @test
     */
    public function porteEmpresaMultinacional()
    {
        $this->assertEquals('MULTINACIONAL', $this->empresa->verificaPorte('jp'));
    }
}

