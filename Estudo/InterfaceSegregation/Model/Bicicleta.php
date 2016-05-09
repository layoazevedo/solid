<?php

namespace LayoAzevedo\InterfaceSegregation\Model;

use LayoAzevedo\InterfaceSegregation\Model\VeiculoInterface;

class Bicicleta implements VeiculoInterface
{
    public function run()
    {
        return 'Bicicleta andando';
    }
}
