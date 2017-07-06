<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class ProyectosController extends Controller
{
    public function index(){

    	return view('informe.proyectos.index');

    }

    public function create(){

        return view('informe.proyectos.create');

    }

    public function store(){

    }

    public function edit(){
    return view('informe.proyectos.edit');
    }

    public function update(){

    }

    public function destroy(){

    }
}


