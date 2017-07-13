@extends('template.defaultinforme')

@section('title', 'Tipos de polizas')

@section('content')

    <div class="buscador-usuarios-container">
    	
    </div>

    <div class="boton-agregar"></div>

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">USUARIOS DEL SISTEMA</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-usuarios-container">
	  <div class="row">
	  	<div class="col-xs-10 offset-2">
	  		<table class="table">
	  		    <thead class="thead-inverse">
	  		    	<tr>
	  		    		<th>Nombre completo</th>
	  		    		<th>Usuario</th>
	  		    		<th>Estatus</th>
	  		    		<th>Editar</th>
                        <th>Ver</th>
	  		    	</tr>
	  		    </thead>
	  		    <tbody>
	  		    	@foreach ($users as $user)
	  		    	<tr>
	  		    		<td>{{ $user->Nombre }}</td>
	  		    		<td>{{ $user->usuario }}</td>
	  		    		<td>{{ $user->Activo }}</td>
	  		    		<td></td>
	  		    		<td></td>
	  		    	</tr>
	  		    	@endforeach
	  		    </tbody>
	  			
	  		</table>
	  	</div>
	  </div>
		
	</div>

 @endsection