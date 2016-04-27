<?php

namespace LayoAzevedo\LiskovSubstitution\Model;

class Dirigir
{
    public function executar(VeiculoAbstract $veiculo)
    {
        return $veiculo->ligarMotor();
    }
}
