<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class EmpresasController extends Controller
{
    public function index()
      {
          // $empleados = Empleado::all();
          // dd($cuentas);
          return view('empresas.index');

      }

      public function create(){

          return view('empresas.create');

      }

      public function store(){

      }

      public function edit(){
      	return view('empresas.edit');
      }

      public function update(){

      }

      public function destroy(){

      }
}
