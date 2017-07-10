<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

use Melo\Parametro;

class CuentasController extends Controller
{
      public function index()
      {
          $cuentas = Parametro::all();
          // dd($cuentas);
          return view('informe.cuentas.index')->with('cuentas', $cuentas);

      }

      public function create(){

          return view('informe.cuentas.create');

      }

      public function store(){

      }

      public function edit(){
      	return view('informe.cuentas.edit');
      }

      public function update(){

      }

      public function destroy(){

      }
}
