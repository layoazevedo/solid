<?php

namespace LayoAzevedo\LiskovSubstitution\Model;

use LayoAzevedo\LiskovSubstitution\Model\VeiculoAbstract;

class Carro extends VeiculoAbstract
{
    public function ligarMotor()
    {
        return $this->ignicao();
    }

    private function ignicao()
    {
        return 'Ligando carro';
    }
}
