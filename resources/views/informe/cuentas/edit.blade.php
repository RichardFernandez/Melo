@extends('template.defaultinforme')

@section('title', 'Edicion de cuentas')

@section('content')

	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">EDITAR CUENTAS</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-polizas-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-8 offset-2">
	  	     {{Form::open(['route' => ['informe.cuentas.update', 'hola'], 'method' => 'PUT'])}}
	  	        <div class="form-group row">
	  	  	       {{Form::label('ctaprovisionurba', 'Cta. de provisión de urba:',['class' => 'col-3 col-form-label'])}}
	  	  	       <div class="col-6">
	  	  	   	     {{Form::text('ctaprovisionurba', null, ['class' => 'form-control', 'required'])}}
	  	  	       </div>
	  	        </div>	
	  	        <div class="form-group row">
	  	  	       {{Form::label('provisiondegi', 'Cta. de provisión de GI',['class' => 'col-3 col-form-label'])}}
	  	  	       <div class="col-6">
	  	  	   	     {{Form::text('provisiondegi', null, ['class' => 'form-control', 'required'])}}
	  	  	       </div>
	  	        </div>	
	  	        <div class="form-group row">
	  	  	       {{Form::label('ctaprovgf', 'Cta. de provión de GF',['class' => 'col-3 col-form-label'])}}
	  	  	       <div class="col-6">
	  	  	   	     {{Form::text('ctaprovgf', null, ['class' => 'form-control', 'required'])}}
	  	  	       </div>
	  	        </div>	
	  	        <div class="form-group row">
	  	  	       {{Form::label('ctacompras', 'Cta. de compras',['class' => 'col-3 col-form-label'])}}
	  	  	       <div class="col-6">
	  	  	   	     {{Form::text('ctacompras', null, ['class' => 'form-control', 'required'])}}
	  	  	       </div>
	  	        </div>	
	  	        
	  	        <div class="form-group row">
	  	          <div class="col-md-9 ml-auto">
	  	          	<div class="form-group">
	  	          	    <a href="{{route('informe.cuentas.index')}}" title="" class="btn btn-info">REGRESAR</a>
        				{{ Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-danger']) }}
        			</div>
	  	          </div>
	  	        </div>	

	  	     {{Form::close()}}   
	  	</div>
	  </div>
		
	</div>

 @endsection
  
