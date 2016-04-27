<?php

namespace LayoAzevedo\SingleResponsability\Model;

use LayoAzevedo\SingleResponsability\Type\TipoEmpresaInterface;

class PorteEmpresa implements TipoEmpresaInterface
{
    public function verificaPorte($empresa)
    {
        if ($empresa == 'pt-br') {
            return TipoEmpresaInterface::PORTE_NACIONAL;
        }

        return TipoEmpresaInterface::PORTE_MULTINACIONAL;
    }
}
