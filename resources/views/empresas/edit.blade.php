@extends('template.defaultinforme')

@section('title', 'Edicion de empresas')

@section('content')

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">CAPTURA DE EMPRESA</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-empresas-container">
	  <div class="row">
	  	<div class="col-xs-10 offset-2">
	  	  {{ Form::open(['file' => 'true']) }}
	      	<div class="form-group">
	      		{{ Form::label('nombre_empresa', 'Nombre de la empresa') }}
	      		{{ Form::text('nombre_empresa', null, ['class' => 'form-control', 'required']) }}
	      	</div>
	      	<div class="form-group">
	      		{{ Form::label('razon_social', 'Razon Social') }}
	      		{{ Form::text('razon_social', null, ['class' => 'form-control', 'required']) }}
	      	</div>
	      	<div class="form-group">
	      		{{ Form::label('rfc', 'RFC') }}
	      		{{ Form::text('rfc', null, ['class' => 'form-control']) }}
	      	</div>
	      	<div class="form-group">
	      		{{ Form::label('direccion', 'Dirección') }}
	      		{{ Form::text('direccion', null, ['class' => 'form-control']) }}
	      	</div>
	      	<div class="form-group">
	      	    {{ Form::label('logo', 'Logo') }}
	      		{{ Form::file('logo') }}
	      	</div>
	      	<div class="form-group ">
	      	    <div class="col-4 ">
	      	      {{ Form::submit('Registrar empresa',['class' => 'btn btn-primary']) }}
	      	    </div>  
	      	</div>
	  	  {{ Form::close() }}
	  	</div>
	  </div>
		
	</div>

 @endsection