<?php

namespace LayoAzevedo\DependencyInversion\Model;

use LayoAzevedo\DependencyInversion\Model\BebidaInterface;

class Bar implements BebidaInterface
{
    public function cerveja()
    {
        return 'Bebendo cerveja';
    }

    public function refrigerante()
    {
        return 'Bebendo refrigerante';
    }
}
