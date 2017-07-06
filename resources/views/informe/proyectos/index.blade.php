@extends('template.defaultinforme')

@section('title', 'proyectos')

@section('content')

  <div class="row">
  	<div class="col-md-4 offset-2">
  		<div class="buscador-proyectos-container">
  			
  		</div>
  	</div>
  	<div class="col-md-4">
  		<div class="boton-agregar">
  			<a href="" title="" class="btn btn-success">Agregar nuevo proyecto</a>
  		</div>
  	</div>
  </div>

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">PROYECTOS CAPTURADOS</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-proyectos-container">
	  <div class="row">
	  	<div class="col-xs-10 offset-2">
	  		<table class="table">
	  		    <thead class="thead-inverse">
	  		    	<tr>
	  		    		<th>Nombre del proyecto</th>
	  		    		<th>Código del proyecto en Neodata</th>
	  		    		<th>Activo</th>
	  		    		<th>O.P</th>
	  		    		<th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
	  		    	</tr>
	  		    </thead>
	  		    <tbody>
	  		    	<tr></tr>
	  		    </tbody>
	  			
	  		</table>
	  	</div>
	  </div>
		
	</div>

 @endsection