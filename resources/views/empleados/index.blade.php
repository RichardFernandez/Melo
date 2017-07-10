@extends('template.defaultinforme')

@section('title', 'Empleados MELO')

@section('content')
 
    <div class="empleados-container">
        <div class="row buscador">
          <div class="col-xs-10 offset-2">
          	{{ Form::open() }}
          	   <div class="form-group">
          	   	{{ Form::text('nombre_empleado', false, ['class' => 'form-control', 'placeholder' => 'Nombre del empleado']) }}
          	   	<button class="btn btn-info my-2 my-sm-0" type="submit">Buscar empleado</button>
          	   </div>
          	{{ Form::close() }}
          </div>
        </div>
        <div class="row botones">
        	<div class="col-xs-12 col-md-3 offset-2">
        		<a href="" title=""></a>
        	</div>
        	<div class="col-xs-12 col-md-3">
        		<a href="" title="">Recargar listado</a>
        	</div>
        	<div class="col-xs-12 col-md-3">
        		<a href="{{ route('empleados.create') }}" title="">Agregar nuevo empleado</a>
        	</div>
        </div>
    	<div class="row">
    		<div class="col-12">
    		   <div class="table-empleados">
    		   	  <table class="table">\
    		   	     <thead class="thead-inverse">
    		   	     	<tr>
    		   	     		<th>No. empleado</th>
    		   	     		<th>Nombre</th>
    		   	     		<th>Puesto</th>
    		   	     		<th>Usuario</th>
    		   	     		<th>Sistemas</th>
    		   	     		<th>Status</th>
    		   	     		<th>Ver</th>
    		   	     		<th>Editar</th>
    		   	     		<th>Desactivar</th>
    		   	     	</tr>
    		   	     </thead>
    		   	     <tbody>
    		   	     	<tr></tr>
    		   	     </tbody>
    				
    			  </table>
    		   </div>
    		</div>
    	</div>
    </div> 
    {{-- final del div empleados container --}}

@endsection