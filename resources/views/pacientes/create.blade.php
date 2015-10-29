@extends('app')

@section('title')
    Agregar Paciente :: Clínica Universitaria - UTP ::
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        {!! Form::open(['method' => 'POST', 'route' => 'pacientes.store', 'files' => true]) !!}

            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <center>
                        {!! Form::label('FOTO_PERSONAL', 'Foto Paciente', array('class' => 'control-label')) !!}
                        <div class="text-center">
                            {!! Html::image('img/usersilhouette.png', 'Foto Paciente', ['id' => 'img-personal', 'class' => 'img-personal']) !!}
                        </div>
                        <span class="btn btn-primary btn-outline btn-file btn-sm">
                            <i class="fa fa-plus"></i> Agregar Foto {!! Form::file('FOTO_PERSONAL', array('id' => 'FOTO_PERSONAL', 'accept' => 'image/*')) !!}
                        </span>
                    </center><br>
                </div>

                <div class="col-sm-12 col-md-10">
                    <div class="panel with-nav-tabs panel-clinica">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab"><b>GENERALES DEL PACIENTE</b></a></li>
                                <li><a href="#tab2" data-toggle="tab"><b>ANTECEDENTES</b></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1">
                                    {{-- Formulario --}}
                                    @include('pacientes.partials.forms')
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    @include('pacientes.partials.form-antecedente')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary btn-outline"><i class="glyphicon glyphicon-ok"></i> Finalizar</button>
            </div>
        {!! Form::close() !!}

    </div>
</div>
@stop

@section('new_scripts')
	<script type="text/javascript">
		$(function() {
		    // Create the preview image
		    $("#FOTO_PERSONAL").change(function (){
		        var file = this.files[0];
		        var reader = new FileReader();
		        // Set preview image into the popover data-content
		        reader.onload = function (e) {
		            $('#img-personal').attr('src', e.target.result);
		        }
		        reader.readAsDataURL(file);
		    });
		});
	</script>
@append
