@extends('template.defaultinforme')

@section('title', 'Tipos de polizas')

@section('content')

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">TIPOS DE PÓLIZAS</h2>
	  	</div>
	  </div>	
	</div>

		<div class="form-polizas-container">
		  <div class="row">
		  	<div class="col-xs-6 offset-2">
		  		<table class="table table-hover">

		  		   <tbody>
		  		   	 <tr>
		  		   	 	<th scope="row">Obra en Proceso:</th>
		  		   	 	<td></td>
		  		   	 </tr>
		  		   </tbody>
		  		   <tr>
		  		   	 	<th scope="row">Vivienda terminada:</th>
		  		   	 	<td></td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Costo de venta:</th>
		  		   		<td></td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Provisión de obra:</th>
		  		   		<td></td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Cancelación de provisión de obra:</th>
		  		   		<td></td>
		  		   	</tr>	               
		  		   	 <tr>
	                	<td>
	                		<a href="{{route('informe.tipospolizas.edit', 1)}}" title="" class="btn btn-warning">EDITAR</a>
	                	</td>
	                </tr>
		  			
		  		</table>
		  	</div>
		  </div>
			
		</div>


 @endsection
  

