<?php

namespace LayoAzevedo\LiskovSubstitution\Model;

use LayoAzevedo\LiskovSubstitution\Model\VeiculoAbstract;

class OnibusEletrico extends VeiculoAbstract
{
    public function acelerar()
    {
        return $this->voltagem();
    }

    private function voltagem()
    {
        return 'Acelerando 220V';
    }
}
