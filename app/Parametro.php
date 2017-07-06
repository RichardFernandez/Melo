<?php

namespace Melo;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'Parametros';

    protected $fillable = ['RutaReportes', 'TipoPolObraEnProceso', 'TipoPolVivTerminada', 'TipoColCostoVenta', 'TipoPolProvisionVenta', 'TipoPolCanProvisionVenta', 'CtaProvisionUrba', 'CtaProvisionGI', 'CtaProvisionGF', 'CtaCompras'];
}
