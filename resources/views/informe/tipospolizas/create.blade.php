@extends('template.defaultinforme')
@section('title', 'captura de polizas')
@section('content')

  <main>
  	<h2 class="titulos">
  		TIPOS DE PÓLIZAS
  	</h2>
    {!! Form::open(['route' => 'informe.tipospolizas.store', 'method' => 'POST']) !!}

       <div class="form-group">
       	  {!! Form::label('op', 'Obra en proceso:') !!}
       	  {!! Form::text('op', null, ['class' => 'form-control', 'required']) !!}
       </div>

       <div class="form-group">
       	  {!! Form::label('vt', 'Vivienda terminada:') !!}
       	  {!! Form::text('vt', null, ['class' => 'form-control', 'required']) !!}
       </div>

       <div class="form-group">
       	  {!! Form::label('cv', 'Costo de venta:') !!}
       	  {!! Form::text('cv', null, ['class' => 'form-control', 'required']) !!}
       </div>

       <div class="form-group">
       	  {!! Form::label('po', 'Provisión de obra:') !!}
       	  {!! Form::text('po', null, ['class' => 'form-control', 'required']) !!}
       </div>

       <div class="form-group">
       	  {!! Form::label('cop', 'Cancelación de provisión de obra:') !!}
       	  {!! Form::text('cop', null, ['class' => 'form-control', 'required']) !!}
       </div>

       <div class="row">
          <div class="col-xs-12 col-md-2">
	       <div class="form-group">
	       	  {!! Form::submit('CANCELAR', ['class' => 'btn btn-warning']) !!}
	       </div>
	      </div> 
	      <div class="col-xs-12 col-md-2">
	       <div class="form-group">
	       	  {!! Form::submit('GUARDAR', ['class' => 'btn btn-info']) !!}
	       </div>
          </div>
       </div>

    {!! Form::close() !!}
  </main>

@stop