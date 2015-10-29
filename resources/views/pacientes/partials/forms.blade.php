{{-- Tab Generales del Paciente --}}
<div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">
          <i class="fa fa-info-circle"></i>
          <strong>Datos de Identificación</strong>
          <small class="small-font">Complete los datos solicitados con la información de identificación básica del paciente</small>
      </h3>
    </div>
    <div class="panel-body">
    	<div class="row">
			<div class="form-group col-sm-4">
				{!! Form::label('NO_CEDULA', 'Número de Cédula:', array('class' => 'control-label')) !!}
				{!! Form::text('NO_CEDULA', null, array('class'=>'form-control input-sm', 'placeholder' => 'Cédula')) !!}
			</div>
            <div class="form-group col-sm-4">
				{!! Form::label('SEGURO_SOCIAL', 'Número de SS:', array('class' => 'control-label')) !!}
				{!! Form::text('SEGURO_SOCIAL', null, array('class'=>'form-control input-sm', 'placeholder' => 'Seguro Social')) !!}
			</div>
			<div class="form-group col-sm-4">
				{!! Form::label('ID_NACIONALIDAD', 'Nacionalidad:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_NACIONALIDAD', array('0'=>'SELECCIONE NACIONALIDAD') + \App\Nacionalidad::lists('DESCRIPCION', 'ID_NACIONALIDAD')->toArray(), null, array('class'=>'form-control input-sm')) !!}
			</div>
      	</div>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">
          <i class="fa fa-user"></i>
          <strong>Datos Personales Del Paciente</strong>
          <small class="small-font">Información detallada sobre el paciente</small>
      </h3>
    </div>
    <div class="panel-body">
    	<div class="row">
			<div class="form-group col-sm-4">
				{!! Form::label('PRIMER_NOMBRE', 'Primer Nombre:', array('class' => 'control-label')) !!}
				{!! Form::text('PRIMER_NOMBRE', null, array('class'=>'form-control input-sm', 'placeholder' => 'Primer Nombre') ) !!}
			</div>
			<div class="form-group col-sm-4">
				{!! Form::label('SEGUNDO_NOMBRE', 'Segundo Nombre:', array('class' => 'control-label')) !!}
				{!! Form::text('SEGUNDO_NOMBRE', null, array('class'=>'form-control input-sm', 'placeholder' => 'Segundo Nombre') ) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('APELLIDO_PATERNO', 'Apellido Paterno:', array('class' => 'control-label')) !!}
				{!! Form::text('APELLIDO_PATERNO', null, array('class'=>'form-control input-sm', 'placeholder' => 'Apellido Paterno') ) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('APELLIDO_MATERNO', 'Apellido Materno:', array('class' => 'control-label')) !!}
				{!! Form::text('APELLIDO_MATERNO', null, array('class'=>'form-control input-sm', 'placeholder' => 'Apellido Materno') ) !!}
			</div>
            <div class="form-group col-sm-4">
				{!! Form::label('ID_SEXO', 'Sexo:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_SEXO', array('0'=>'SELECCIONE SEXO') + \App\Sexo::lists('DESCRIPCION', 'ID_SEXO')->toArray(), null, array('class'=>'form-control input-sm')) !!}
			</div>
            <div class="form-group col-sm-4">
				{!! Form::label('ID_ESTADO_CIVIL', 'Estado Civil:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_ESTADO_CIVIL', array('0'=>'SELECCIONE ESTADO CIVIL') + \App\EstadoCivil::lists('DESCRIPCION', 'ID_ESTADO_CIVIL')->toArray(), null, array('class'=>'form-control input-sm')) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('FECHA_NACIMIENTO', 'Fecha Nacimiento:', array('class' => 'control-label')) !!}
				{!! Form::text('FECHA_NACIMIENTO', null, array('class'=>'form-control input-sm datetimepicker', 'id' => 'fecha_nac', 'placeholder' => 'AAAA-MM-DD') ) !!}
			</div>
			<div class="form-group col-sm-4">
				{!! Form::label('ID_TIPO_SANGUINEO', 'Tipo Sangre:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_TIPO_SANGUINEO', array('0'=>'SELECCIONE TIPO SANGRE') + \App\TipoSanguineo::lists('DESCRIPCION', 'ID_TIPO_SANGUINEO')->toArray(), null, array('class'=>'form-control input-sm')) !!}
			</div>
      	</div>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">
          <i class="fa fa-map-marker"></i>
          <strong>Contacto/Dirección del Paciente</strong>
          <small class="small-font">Dirección y datos de contacto del paciente</small>
      </h3>
    </div>
    <div class="panel-body">
		<div class="row">
            <div class="form-group col-sm-4">
			    {!! Form::label('ID_PROVINCIA', 'Provincia:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_PROVINCIA', array('0'=>'SELECCIONE PROVINCIA') + \App\Provincia::lists('DESCRIPCION', 'ID_PROVINCIA')->toArray(), null, array('class'=>'form-control input-sm', 'id' => 'ID_PROVINCIA')) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('ID_DISTRITO', 'Distrito:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_DISTRITO', array('0'=>'SELECCIONE DISTRITO') + \App\Distrito::lists('DESCRIPCION', 'ID_DISTRITO')->toArray(), null, array('class'=>'form-control input-sm', 'id' => 'ID_DISTRITO')) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('ID_CORREGIMIENTO', 'Corregimiento:', array('class' => 'control-label')) !!}
				{!! Form::select('ID_CORREGIMIENTO', array('0'=>'SELECCIONE CORREGIMIENTO') + \App\Corregimiento::lists('DESCRIPCION', 'ID_CORREGIMIENTO')->toArray(), null, array('class'=>'form-control input-sm', 'id' => 'ID_CORREGIMIENTO')) !!}
			</div>
            <div class="form-group col-sm-4">
			    {!! Form::label('DETALLE', 'Dirección Detallada:', array('class' => 'control-label')) !!}
				{!! Form::textarea('DETALLE', null, array('class'=>'form-control input-sm', 'placeholder' => 'Dirección Detallada', 'size'=>'1x4')) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('TELEFONO_CASA', 'Teléfono de Casa:', array('class' => 'control-label')) !!}
				{!! Form::text('TELEFONO_CASA', null, array('class'=>'form-control input-sm', 'placeholder' => 'Teléfono de Casa')) !!}
			</div>
			<div class="form-group col-sm-4">
			    {!! Form::label('TELEFONO_CELULAR', 'Teléfono Celular:', array('class' => 'control-label')) !!}
				{!! Form::text('TELEFONO_CELULAR', null, array('class'=>'form-control input-sm', 'placeholder' => 'Celular')) !!}
			</div>
            <div class="form-group col-sm-4">
                {!! Form::label('TELEFONO_TRABAJO', 'Teléfono de Trabajo:', array('class' => 'control-label')) !!}
                {!! Form::text('TELEFONO_TRABAJO', null, array('class'=>'form-control input-sm', 'placeholder' => 'Teléfono de Trabajo')) !!}
            </div>
            <div class="form-group col-sm-4">
			    {!! Form::label('E_MAIL', 'Correo Electrónico:', array('class' => 'control-label')) !!}
				{!! Form::text('E_MAIL', null, array('class'=>'form-control input-sm', 'placeholder' => 'Correo Electrónico')) !!}
			</div>
		</div>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">
          <i class="glyphicon glyphicon-education"></i>
          <strong>Datos Universitarios</strong>
          <small class="small-font">Indique los datos universitarios del paciente</small>
      </h3>
    </div>
    <div class="panel-body">
    	<div class="row">
			<div class="form-group col-sm-4">
                {!! Form::label('ID_CATEGORIA', 'Tipo Paciente:', array('class' => 'control-label')) !!}
                {!! Form::select('ID_CATEGORIA', array('0' => 'SELECCIONE EL TIPO DE PACIENTE') + \App\CategoriaPaciente::lists('DESCRIPCION', 'ID_CATEGORIA')->toArray(), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('ID_FACULTAD', 'Facultad:') !!}
                {!! Form::select('ID_FACULTAD', array('0' => 'SELECCIONE LA FACULTAD') + \App\Facultad::lists('DESCRIPCION', 'ID_FACULTAD')->toArray(), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('ID_CENTRO', 'Centro:') !!}
                {!! Form::select('ID_CENTRO', array('0' => 'SELECCIONE EL CENTRO') + \App\Centro::lists('DESCRIPCION', 'ID_CENTRO')->toArray(), null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('ID_INSTANCIA', 'Instancia:') !!}
                {!! Form::select('ID_INSTANCIA', array('0' => 'SELECCIONE LA INSTANCIA') + \App\Instancia::lists('DESCRIPCION', 'ID_INSTANCIA')->toArray(), null, ['class' => 'form-control']) !!}
            </div>
      	</div>
    </div>
</div>
