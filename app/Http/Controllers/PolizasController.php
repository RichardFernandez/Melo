<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class PolizasController extends Controller
{
    public function index(){

    	return view('informe.tipospolizas.index');

    }

    public function create(){

        return view('informe.tipospolizas.create');

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
