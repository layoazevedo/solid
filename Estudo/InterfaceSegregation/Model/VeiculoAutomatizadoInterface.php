<?php

namespace LayoAzevedo\InterfaceSegregation\Model;

use LayoAzevedo\InterfaceSegregation\Model\VeiculoInterface;

interface VeiculoAutomatizadoInterface extends VeiculoInterface
{
    public function ligar();
    public function combustivel();
}
