@extends('app')

@section('title')
    Documentos Clínicos :: Clínica Universitaria - UTP ::
@endsection

@section('content')

    @include('documentos.partials.documentos-encabezado')

    <h2 class="title">Documentos Clínicos</h2>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-info">
                <p>
                    Pase el cursor sobre el icono <i class="fa fa-cog"></i> para ver las descripciones de cada módulo.</br>
                    Haga click en el módulo elegido para abrirlo.
                </p>   
            </div>
            <div class="menu-wheel">
                <a href="#whell" class="wheel-button btn btn-default btn-lg btn-outline" title="Documentos Clínicos">
                 <i class="fa fa-cog"></i>
                </a>
                <ul id="whell" class="wheel">
                  <li class="item">
                    <a href="#home" title="Recetas">
                        <i class="fa fa-file-text-o fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Certificado de Buena Salud">
                        <i class="fa fa-smile-o fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Constancia de Asistencia">
                        <i class="fa fa-credit-card fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Certificado de incapacidad">
                        <i class="fa fa-frown-o fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="{{ route('documentos.receta-laboratorio.index') }}" title="Recetas de Laboratorio">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Hoja de Referencia">
                        <i class="fa fa-sign-out fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Hoja Clínica">
                        <i class="fa fa-paste fa-2x"></i>
                    </a>
                  </li>
                  <li class="item">
                    <a href="#home" title="Archivo Clínico">
                        <i class="fa fa-medkit fa-2x"></i>
                    </a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('new_scripts')
    {!! Html::script('assets/js/jquery.wheelmenu.min.js') !!}
    <script type="text/javascript">        
        $(".wheel-button").wheelmenu({
          trigger: "hover", // Can be "click" or "hover". Default: "click"
          animation: "fade", // Entrance animation. Can be "fade" or "fly". Default: "fade"
          animationSpeed: "fast", // Entrance animation speed. Can be "instant", "fast", "medium", or "slow". Default: "medium"
          angle: "all", // Angle which the menu will appear. Can be "all", "N", "NE", "E", "SE", "S", "SW", "W", "NW", or even array [0, 360]. Default: "all" or [0, 360]
        });
    </script>
@append