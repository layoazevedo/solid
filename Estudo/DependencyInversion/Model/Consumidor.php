<?php

namespace LayoAzevedo\DependencyInversion\Model;

class Consumidor
{
    private $bebida;

    public function __construct(Bar $bebida)
    {
        $this->bebida = $bebida;
    }

    public function beber($idade)
    {
        if ($idade >=18) {
            return $this->bebida->cerveja();
        }

        return $this->bebida->refrigerante();
    }
}
