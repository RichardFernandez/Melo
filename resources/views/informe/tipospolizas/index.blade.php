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
		  		   	 	<td>{{ $parametro->TipoPolObraEnProceso }}</td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Vivienda terminada:</th>
		  		   	 	<td>{{ $parametro->TipoPolVivTerminada }}</td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Costo de venta:</th>
		  		   	 	<td>{{ $parametro->TipoPolCostoVenta }}</td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Provisión de obra:</th>
		  		   	 	<td>{{ $parametro->TipoPolProvisionVenta }}</td>
		  		   	</tr>
		  		   	<tr>
		  		   		<th scope="row">Cancelación de provisión de obra:</th>
		  		   	 	<td>{{ $parametro->TipoPolCanProvisionVenta }}</td>
		  		   	</tr>	               
		  		   	<tr>
		  		   		<td>
		  		   			<a href="{{route('informe.tipospolizas.edit', 1)}}" title="" class="btn btn-warning">EDITAR</a>
		  		   		</td>
		  		   	</tr>
				</tbody>
		  	</table>
		</div>
	</div>
</div>

@endsection