<?php

namespace LayoAzevedo\OpenClosed\Model;

class FabricaMotor
{
    public function fabricar(AbstractMotor $motor)
    {
        return $motor->tipo();
    }
}
