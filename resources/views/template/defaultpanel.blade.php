<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="../../favicon.ico"> --}}

    <title>@yield('title', 'Software Grupo Melo')</title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet"> 
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/bootstrap/css/bootstrap-flexmin.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/melo.css') }}" rel="stylesheet">

  </head>

  <body>
  
  @include('template.partials.panelnav')
  

  <div class="container-fluid">

    @yield('content')
    
  </div>
  
  <footer>
    @include('template.partials.footer')
  </footer>

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('libs/jquery/jquery-3.2.1.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('libs/chosen/chosen.jquery.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    @yield('js')
  </body>
</html>