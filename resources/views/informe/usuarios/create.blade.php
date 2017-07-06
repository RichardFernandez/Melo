@extends('template.defaultinforme')

@section('title', 'Tipos de polizas')

@section('content')

    
	<div class="title-container">
	  <div class="row">
	  	<div class="col-xs-8 col-md-6 offset-2">
	  		<h2 class="titulos">AGREGAR USUARIO AL SISTEMA</h2>
	  	</div>
	  </div>	
	</div>

	<div class="form-usuario-container">
	  <div class="row">	 
	     <div class="col-xs-10 offset-2"> 
	    	{{Form::open()}}
				<div class="usuario">
					<div class="form-group">
						{{Form::label('Nombre', 'Nombre')}}
						{{Form::select('Nombre', ['empleado1' => 'Empleado 1', 'empleado2' => 'Empleado 2'], null, ['class' => 'form-control', 'placeholder' => 'Selecciona al empleado', 'required'])}}
					</div>

					<div class="form-group">
						{{Form::label('usuario', 'Usuario')}}
						{{Form::text('Nombre', null, ['class' => 'form-control', 'required'])}}
					</div>

                    <div class="form-group">
						{{Form::label('Clave', 'Contraseña')}}
						{{Form::password('Clave', ['class' => 'form-control', 'placeholder' => '..........', 'required'])}}
					</div>

				</div>
                 <hr>
				<div class="permisos">
				   <h2>Permisos</h2>
				   <div class="row">
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('proyectos', 'proyectos')}}
					   	  	{{Form::label('proyectos', 'Proyectos')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('mod_proyectos', 'mod_proyectos')}}
					   	  	{{Form::label('mod_proyectos', 'Modificar proyectos')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('conf_proyectos', 'conf_proyectos')}}
					   	  	{{Form::label('conf_proyectos', 'Configurar proyectos')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('conf_mod_proy', 'con_mod_proy')}}
					   	  	{{Form::label('conf_mod_proy', 'Conf Proy modificar')}}
					   	  </div>				  
					   	</div>

				   </div>

				   <div class="row">
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('ubicaciones', 'ubicaciones')}}
					   	  	{{Form::label('ubicaciones', 'Ubicaciones')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('mod_ubicaciones', 'mod_ubicaciones')}}
					   	  	{{Form::label('mod_ubicaciones', 'Modificar ubicaciones')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('obra', 'obra')}}
					   	  	{{Form::label('obra', 'Obra')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('mod_obra', 'mod_obra')}}
					   	  	{{Form::label('mod_obra', 'Modificar obra')}}
					   	  </div>				  
					   	</div>

				   </div>

				   <div class="row">
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('ventas', 'ventas')}}
					   	  	{{Form::label('ventas', 'Ventas')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('mod_ventas', 'mod_ventas')}}
					   	  	{{Form::label('mod_ventas', 'Modificar ventas')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('reportes', 'reportes')}}
					   	  	{{Form::label('reportes', 'Reportes')}}
					   	  </div>				  
					   	</div>
					   	<div class="col-md-3">
					   	  <div class="form-group">
					   	  	{{Form::checkbox('generar_reportes', 'generar_reportes')}}
					   	  	{{Form::label('generar_reportes', 'Generar reportes')}}
					   	  </div>				  
					   	</div>
                      
				   </div>
				   <div class="row">
				   	  <div class="col-xs-12 col-md-2">
				   	  	  <div class="form-group">
				   	  	      {!! Form::submit('GUARDAR', ['class' => 'btn btn-info']) !!}
				   	  	  </div>
				   	  </div>
				   </div>
					
				</div>
			{{Form::close()}}
		</div>
	  </div>
	
	</div>
  

@endsection