<?php

namespace Melo\Http\Controllers;

use Illuminate\Http\Request;

use Melo\Http\Requests;

class AccesoController extends Controller
{
    public function index(){
    	return view('acceso');
    }
}
