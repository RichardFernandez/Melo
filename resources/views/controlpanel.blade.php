@extends('template.defaultpanel')

@section('content')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h2 class="titulo">PANEL DE CONTROL / SISTEMAS GRUPO MELO</h2>
          <div class="row sistemas">
	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-panel">
	          		<a href="">
	          			<img src="images/icono-informe.png" alt="icono sistema informe"><br/>
	          			ESTADOS FINANCIEROS
	          		</a>
	          	</span>
	          </div>

	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-panel">
	          		<a href="">
	          			<img src="images/icono-atm.png" alt="icono sistema atm"><br/>
	          			ATM MAQUINARIA
	          		</a>
	          	</span>
	          </div>

	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-panel">
	          		<a href="">
	          			<img src="images/icono-concreto.png" alt="icono sistema planta de concreto"><br/>
	          			PLANTA DE CONCRETO
	          		</a>
	          	</span>
	          </div>

	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-panel">
	          		<a href="">
	          			<img src="images/icono-dino.png" alt="icono sistema dino"><br/>
	          			DINO
	          		</a>
	          	</span>
	          </div>
          </div>

          <div class="row resumenes">
          <div class="col-xs-12">
          	<h2 class="titulo">INFORMACIÓN GENERAL</h2>
          </div>
          
          	<div class="col-xs-12 col-md-3">
	          	<span class="enlaces-generales-panel">
	          		<a href="">
	          			<img src="images/icono-desviacion.png" alt="icono desviacion"><br/>
	          			DESVIACIÓN PRESUPUESTO vs GASTO REAL
	          		</a>
	          	</span>
	          </div>
	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-generales-panel">
	          		<a href="">
	          			<img src="images/icono-avance.png" alt="icono avance de royectos"><br/>
	          			AVANCE GENERAL DE PROYECTOS
	          		</a>
	          	</span>
	          </div>
	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-generales-panel">
	          		<a href="">
	          			<img src="images/icono-empleados.png" alt="icono empleados"><br/>
	          			EMPLEADOS REGISTRADOS
	          		</a>
	          	</span>
	          </div>
	          <div class="col-xs-12 col-md-3">
	          	<span class="enlaces-generales-panel">
	          		<a href="">
	          			<img src="" alt=""><br/>
	          			
	          		</a>
	          	</span>
	          </div>

          </div>



</main>
@stop