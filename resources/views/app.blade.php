<!DOCTYPE html>
<html lang="es-ES">
<head>
	<title>@yield('title', ':: Clínica Universitaria - UTP ::')</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/css/bootstrap.css') !!}

    <!-- Custom styles for this template -->
    {!! Html::style('assets/css/clinica.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/bootstrap-datetimepicker.min.css') !!}
    {!! Html::style('assets/css/bootstrap-table.css') !!}

    @yield('new_css')
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
			    <div class="collapse navbar-collapse navbar-collapsed" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav navbar-right navbar-drop">
				        <li><a href="#">Dr. </a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesión <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				    </ul>
				</div>
			  </div>
			</nav><!-- Fin de navbar -->

			<!-- Contenido -->
			<div class="container-fluid">
				<div class="row cuerpo">
					<div class="col-sm-3">
						<div class="list-group">
						  <a href="{{ url('agenda') }}" class="list-group-item list-menu active">
							  <i class="fa fa-calendar"></i>
							  <span>Agenda de Citas</span>
						  </a>
						  <a href="{{ url('pacientes') }}" class="list-group-item list-menu">
							  <i class="fa fa-user"></i>
							  <span>Nuevo Paciente</span>
						  </a>
						  <a href="{{ url('documentos') }}" class="list-group-item list-menu">
							  <i class="fa fa-file-text"></i>
							  <span> Documentos Clínicos</span>
						  </a>
						  <a href="#" class="list-group-item list-menu">
							  <i class="fa fa-search"></i>
							  <span>Búsqueda</span>
						  </a>
						  <a href="#" class="list-group-item list-menu">
							  <i class="fa fa-bar-chart"></i>
							  <span>Estadística</span>
						  </a>
						</div>
					</div>
					<div class="col-sm-9">
                        <div class="contenido">
						  @yield('content')
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
    {!! Html::script('assets/js/moment.js') !!}
    {!! Html::script('assets/js/moment-es.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/bootstrap-datetimepicker.min.js') !!}
    {!! Html::script('assets/js/bootstrap-table.min.js') !!}
    {!! Html::script('assets/js/locale/bootstrap-table-es-MX.min.js') !!}
	{!! Html::script('assets/js/script.js') !!}
    <script type="text/javascript">
    	var baseurl = '{!! url() !!}';
    </script>
	<script type="text/javascript">
	    $(function () {
	        $('.datetimepicker').datetimepicker({
	        	format: 'YYYY/MM/DD'
	        });
	    });
    </script>
    @yield('new_scripts')
</body>
</html>
