<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>SOFTWARE GRUPO MELO</title>

	<link href="{{ asset('css/normalize.css') }}" rel="stylesheet"> 
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('libs/bootstrap/css/bootstrap-flexmin.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('css/melo.css') }}" rel="stylesheet">
</head>
<body>
	<div id="container-fluid">
		<div class="row flex-items-xs-middle flex-items-xs-center acceso">
			<div class="col-xs-12 formulario">
			    <div class="logo-container">
			    	<img src="images/logo-melo.png" alt="logo grupo melo" width="250">
			    </div>
				{!! Form::open() !!}
                 
                 <div class="form-group login">
                   {!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'required']) !!}
                 </div>

                 <div class="form-group login">
                   {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'required']) !!}
                 </div>

                 <div class="form-group login">
                 	{!! Form::checkbox('sesion', null, ['class' => 'form-control']) !!} Recordar Sesión
                 </div>

                 <div class="form-group login text-xs-center">
                 	{!! Form::submit('ENTRAR', ['class' => 'btn btn-success']) !!}
                 </div>


				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="../../dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>