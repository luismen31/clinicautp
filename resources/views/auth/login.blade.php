<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">    
    <title>@yield('title', ' :: Clínica Universitaria - UTP :: Iniciar Sesión')</title>
   
    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/css/bootstrap.css') !!}
    
    <!-- Custom styles for this template -->
    {!! Html::style('assets/css/clinica.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
        {!! Html::script('assets/js/ie8-responsive-file-warning.min.js') !!}
     <!-- Fonts -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{!! Html::script('assets/js/html5shiv.min.js') !!}"></script>
      <script src="{!! Html::script('assets/js/respond.min.js') !!}"></script>
    <![endif]-->
  </head>

<body>
    <div id="wrap">
        <div id="main" class="clearf">
            <!-- Inicio de navbar -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-style">
              <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed navbar-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brandn nav-logo" href="#">
                        {!! Html::image('img/logo.png', 'Clinica UTP') !!}
                    </a>
                </div>
              </div>
            </nav><!-- Fin de navbar -->
            <div class="container">
                <div class="row cuerpo">
                    <div class="col-sm-4 col-sm-offset-4">
                        @include('mensajes.errors')
                         <div class="panel panel-default" >
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4><i class="glyphicon glyphicon-log-in"></i> Ingreso al Sistema</h4>
                                </div>
                            </div>     
                            <div class="panel-body">
                                {!! Form::open(['url' => 'auth/login', 'method' => 'POST', 'role' => 'form']) !!}
                                    <div class="form-group">
                                        {!! Form::label('NO_IDENTIFICACION', 'Usuario:', ['class' => 'control-label']) !!}
                                        {!! Form::text('NO_IDENTIFICACION', null, ['class' => 'form-control input-sm']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('CLAVE_ACCESO', 'Contraseña:', ['class' => 'control-label']) !!}
                                        {!! Form::password('CLAVE_ACCESO', ['class' => 'form-control input-sm']) !!}
                                    </div>
                                    <div class="text-center">                                    
                                        {!! Form::submit('Enviar', ['class' => 'btn btn-success btn-sm btn-block']) !!}
                                    </div>
                                {!! Form::close() !!}                                
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="footer">
        <div class="row footer">
            <div class="col-sm-12">
                <div class="col-sm-3">
                    <i class="fa fa-phone"></i> 560-3205
                </div>
                <div class="col-sm-3">
                    <i class="fa fa-envelope-o"></i> clinicautp@utp.ac.pa
                </div>
                <div class="col-sm-6 logogises">
                    {!! Html::image('img/giseslogo.png', 'Logo Gises') !!} Grupo de Investigación en Salud Electrónica y Supercomputación - UTP 2012-2013
                </div>                              
            </div>
        </div>
    </div> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
</body>
</html>