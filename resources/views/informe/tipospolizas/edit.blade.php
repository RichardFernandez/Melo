@extends('template.defaultinforme')

@section('title', 'Tipos de polizas')

@section('content')

<div class="title-container">
	<div class="row">
		<div class="col-xs-8 col-md-6 offset-2">
			<h2 class="titulos">EDITAR TIPOS DE PÓLIZAS</h2>
		</div>
	</div>	
</div>

<div class="form-polizas-container">
	<div class="row">
		<div class="col-xs-8 col-md-8 offset-2">
			{{Form::open(['route' => ['informe.tipospolizas.update', 'hola'], 'method' => 'PUT'])}}
			<div class="form-group row">
				{{Form::label('obra_proceso', 'Obra en Proceso:',['class' => 'col-3 col-form-label'])}}
				<div class="col-6">
					{{Form::text('obra_proceso', null, ['class' => 'form-control', 'required'])}}
				</div>
			</div>	
			<div class="form-group row">
				{{Form::label('vivienda_terminada', 'Vivienda terminada:',['class' => 'col-3 col-form-label'])}}
				<div class="col-6">
					{{Form::text('vivienda_terminada', null, ['class' => 'form-control', 'required'])}}
				</div>
			</div>	
			<div class="form-group row">
				{{Form::label('costo_venta', 'Costo de venta:',['class' => 'col-3 col-form-label'])}}
				<div class="col-6">
					{{Form::text('costo_venta', null, ['class' => 'form-control', 'required'])}}
				</div>
			</div>	
			<div class="form-group row">
				{{Form::label('provision_obra', 'Provisión de obra:',['class' => 'col-3 col-form-label'])}}
				<div class="col-6">
					{{Form::text('procision_obra', null, ['class' => 'form-control', 'required'])}}
				</div>
			</div>	
			<div class="form-group row">
				{{Form::label('cancelacion_provision_obra', 'Cancelación de provisión de obra:',['class' => 'col-3 col-form-label'])}}
				<div class="col-6">
					{{Form::text('cancelacion_provision_obra', null, ['class' => 'form-control', 'required'])}}
				</div>
			</div>	
			<div class="form-group row">
				<div class="col-md-9 ml-auto">
					<div class="form-group">
						<a href="{{route('informe.tipospolizas.index')}}" title="" class="btn btn-info">REGRESAR</a>
						{{ Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-danger']) }}
					</div>
				</div>
			</div>	
			{{Form::close()}}  
		</div>
	</div>
</div>

@endsection