<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class UsuariosController extends Controller
{
    public function index(){

    	return view('informe.usuarios.index');

    }

    public function create(){

        return view('informe.usuarios.create');

    }

    public function store(){

    }

    public function edit(){
    return view('informe.usuarios.edit');
    }

    public function update(){

    }

    public function destroy(){

    }
}
