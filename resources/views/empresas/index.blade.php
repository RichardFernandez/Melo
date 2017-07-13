@extends('template.defaultinforme')

@section('title', 'Empresas MELO')

@section('content')
 
    <div class="empresas-container">
        <div class="row botones">
        	<div class="col-xs-12 col-md-3 offset-2">
        		<a href="" title=""></a>
        	</div>
        	<div class="col-xs-12 col-md-3">
        		<a href="{{ route('empresas.create') }}" title="">Agregar nueva empresa</a>
        	</div>
        </div>
    	<div class="row">
    		<div class="col-10 offset-2">
    		   <div class="table-empresas">
    		   	  <table class="table">
    		   	     <thead class="thead-inverse">
    		   	     	<tr>
    		   	     		<th>Nombre Empresa</th>
    		   	     		<th>Razon Social</th>
    		   	     		<th>RFC</th>
    		   	     		<th>Dirección</th>
    		   	     		<th>logo</th>
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
    </div> 
    {{-- final del div empleados container --}}

@endsection