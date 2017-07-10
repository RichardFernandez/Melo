<?php

namespace Melo;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = "Parametros";

    protected $fillable = ["CtaProvisionUrba","CtaProvisionGI","CtaProvisionGF"];
}
