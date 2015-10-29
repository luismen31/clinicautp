@extends('app')

@section('title') Agenda de Citas Médicas :: Clínica Universitaria - UTP :: @stop

@section('new_css')
	{!! Html::style('assets/css/calendar.css') !!}
@append

@section('content')
	<div class="row">
    	<div class="col-xs-12">
		    <div class="page-header">
				<h3></h3>
				<div class="pull-left form-inline">
					<div class="btn-group">
						<button class="btn btn-default" data-calendar-nav="prev"><i class="fa fa-chevron-left"></i></button>
						<button class="btn btn-default" data-calendar-nav="today">Hoy</button>
						<button class="btn btn-default" data-calendar-nav="next"><i class="fa fa-chevron-right"></i></button>
					</div>
					<div class="btn-group">
						<button class="btn btn-success" data-calendar-view="year">Año</button>
						<button class="btn btn-success active" data-calendar-view="month">Mes</button>
						<button class="btn btn-success" data-calendar-view="week">Semana</button>
						<button class="btn btn-success" data-calendar-view="day">Día</button>
					</div>
				</div>
			</div>
    	</div>
    </div>

	<div class="row">
		<div class="col-xs-12">
    		<div id="agenda"></div>
		</div>
	</div>
@stop

@section('new_scripts')
	{!! Html::script('assets/js/underscore-min.js') !!}
	{!! Html::script('assets/js/calendar.js') !!}
	{!! Html::script('assets/js/language/es-CO.js') !!}
	{!! Html::script('assets/js/agenda.js') !!}
@append
