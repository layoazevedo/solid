<?php

namespace LayoAzevedo\InterfaceSegregation\Model;

use LayoAzevedo\InterfaceSegregation\Model\VeiculoAutomatizadoInterface;

class Moto implements VeiculoAutomatizadoInterface
{
    public function combustivel()
    {
        return 'Gasolina';
    }
    
    public function ligar()
    {
        return 'Ligando';
    }

    public function run()
    {
        return 'Pronto';
    }
}
