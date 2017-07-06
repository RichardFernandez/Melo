<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

use Melo\Parametro;

class CuentasController extends Controller
{
      public function index()
      {
          return view('informe.cuentas.index');

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
