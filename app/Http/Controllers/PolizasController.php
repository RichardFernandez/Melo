<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

use Melo\Parametro;

use DB;

class PolizasController extends Controller
{
    public function index() {
        $parametro = Parametro::all()->first();
        return view('informe.tipospolizas.index', compact('parametro'));
    }

    public function create() {
        return view('informe.tipospolizas.create');
    }

    public function store() {

    }

    public function edit() {
        return view('informe.tipospolizas.edit');
    }

    public function update() {
        DB::update('update Parametros set TipoPolObraEnProceso = ?, TipoPolVivTerminada = ?, TipoPolCostoVenta = ?, TipoPolProvisionVenta = ?, TipoPolCanProvisionVenta = ?', [request()->obra_proceso, request()->vivienda_terminada, request()->costo_venta, request()->procision_obra, request()->cancelacion_provision_obra ] );
        $parametro = Parametro::all()->first();
        return view('informe.tipospolizas.index', compact('parametro'));
    }

    public function destroy() {

    }
}
