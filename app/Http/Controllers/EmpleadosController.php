<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class EmpleadosController extends Controller
{
     public function index()
      {
          // $empleados = Empleado::all();
          // dd($cuentas);
          return view('empleados.index');

      }

      public function create(){

          return view('empleados.create');

      }

      public function store(){

      }

      public function edit(){
      	return view('empleados.edit');
      }

      public function update(){

      }

      public function destroy(){

      }
}
