@extends('template.defaultinforme')

@section('title', 'Tipos de polizas')

@section('content')

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">CUENTAS</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-cuentas-container">
	  <div class="row">
	  	<div class="col-xs-6 offset-2">
	  		<table class="table table-hover">

	  		   <tbody>
	  		    @foreach($cuentas as $cuenta)
	  		   	 <tr>

	  		   	 	<th scope="row">Cta. de Provisión de urbanización:</th>
	  		   	 	
	  		   	 	<td>{{ $cuenta->CtaProvisionUrba }}</td>
	  		   	 	
	  		   	 </tr>

	  		   	 <tr>
	  		   	 	<th scope="row">Cta. de provisión de GI:</th>
	  		   	 	<td>{{ $cuenta->CtaProvisionGI }}</td>
	  		   	</tr>
	  		   	<tr>
	  		   		<th scope="row">Cta. de provisión de GF:</th>
	  		   		<td>{{ $cuenta->CtaProvisionGF }}</td>
	  		   	</tr>
	  		   	<tr>
	  		   		<th scope="row">Cta. de compras:</th>
	  		   		<td>{{ $cuenta->CtaCompras }}</td>
	  		   	</tr>
                <tr>
                	<td>
                		<a href="{{route('informe.cuentas.edit', 1)}}" title="" class="btn btn-warning">EDITAR</a>
                	</td>
                </tr>
                @endforeach
	  		   </tbody>
	  		   
	  			
	  		</table>
	  	</div>
	  </div>
		
	</div>

 @endsection