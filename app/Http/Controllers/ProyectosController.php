<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

use Melo\Proyecto;

use DB;

class ProyectosController extends Controller
{
    public function index() {
        $proyectos = DB::table('Proyectos')->select(
            'NombreProyecto', 'ProyectoNeodata', 'Activo', 'EsObraPublica'
        )->get();
    	return view('informe.proyectos.index', compact('proyectos'));
    }

    public function show() {
        // return DB::table('Proyectos')->get();
    }

    public function create() {
        return view('informe.proyectos.create');
    }

    public function store() {

    }

    public function edit() {
        return view('informe.proyectos.edit');
    }

    public function update() {

    }

    public function destroy() {

    }
}


