<?php

namespace LayoAzevedo\OpenClosed\Model;

abstract class AbstractMotor
{
    abstract protected function tipo();

    protected function executar()
    {
        return 'Motor executando';
    }
}
