@extends('app')

@section('title') Documentos Clínicos - Recetas de Laboratorio :: Clínica Universitaria - UTP ::  @stop

@section('new_css') 
	{!! Html::style('assets/css/slidernav.css', ['media' => 'screen, projection']) !!} 
@append

@section('content')
	
	@include('documentos.partials.documentos-encabezado')

	<div class="row">
		<div class="col-sm-12">			
			 
			<h2 class="title"> 
				<a href="{{ url('documentos') }}" class="btn btn-link btn-outline"><i class="fa fa-arrow-circle-left fa-2x"></i></a> Recetas de Laboratorio 
			</h2>
		</div>
	</div>

	<div id="slider">
	    <div class="slider-content">
	        <ul>
	            <li id="a"><a name="a" class="title">A</a>
	                <ul>
	                    <li><a href="/">Adam</a></li>
	                    <li><a href="/">Alex</a></li>
	                    <li><a href="/">Ali</a></li>
	                    <li><a href="/">Apple</a></li>
	                    <li><a href="/">Arthur</a></li>
	                    <li><a href="/">Ashley</a></li>
	                </ul>
	            </li>
	            <li id="b"><a name="b" class="title">B</a>
	                <ul>
	                    <li><a href="/">Barry</a></li>
	                    <li><a href="/">Becky</a></li>
	                    <li><a href="/">Biff</a></li>
	                    <li><a href="/">Billy</a></li>
	                    <li><a href="/">Bozarking</a></li>
	                    <li><a href="/">Bryan</a></li>
	                </ul>
	            </li>
	            etc...
	        </ul>
	    </div>
	</div>

@endsection

@section('new_scripts')
	{!! Html::script('assets/js/slidernav.js') !!}
	<script type="text/javascript">
		$(document).ready(function(){
			$('#slider').sliderNav();  
		});
	</script>
@append