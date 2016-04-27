<?php

namespace LayoAzevedo\LiskovSubstitution\Model;

abstract class VeiculoAbstract
{
    public function ligarMotor()
    {
        return 'Ligando Veiculo';
    }

    public function acelerar()
    {
        return 'Acelerando Veiculo';
    }
}
