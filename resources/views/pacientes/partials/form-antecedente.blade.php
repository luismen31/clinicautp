{{-- Tab Antecedentes --}}
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  {{-- Patológicos --}}
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <b>Patológicos</b>
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <div class="row">
            <div class="form-group col-sm-6">
                {!! Form::label('ENFEMEDADES', 'Enfermedades:') !!}
                {!! Form::textarea('ENFEMEDADES', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('MEDICAMENTOS', 'Medicamentos:') !!}
                {!! Form::textarea('MEDICAMENTOS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('ALERGIAS', 'Alergias:') !!}
                {!! Form::textarea('ALERGIAS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('CIRUGIAS', 'Cirugías Previas:') !!}
                {!! Form::textarea('CIRUGIAS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('HOSPITALIACIONES', 'Hospitalizaciones Previas:') !!}
                {!! Form::textarea('HOSPITALIACIONES', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('ACCIDENTES', 'Accidentes:') !!}
                {!! Form::textarea('ACCIDENTES', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('TRANSFUSIONES', 'Transfusiones:') !!}
                {!! Form::textarea('TRANSFUSIONES', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
          </div>
      </div>
    </div>
  </div>

  {{-- No Patológicos --}}
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
          <b>No Patológicos</b>
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <div class="row">
              <div class="col-sm-6">
                  <div class="well well-sm">
                      <label>¿Usted Fuma?</label>
                      <div class="form-group">
                          <label>Tabaco</label>
                          <label class="radio-inline">
                              <input type="radio" name="tabaco" id="inlineRadio1" value="1"> Sí
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="tabaco" id="inlineRadio2" value="0"> No
                          </label>
                      </div>
                      <div class="form-group">
                          {!! Form::label('cantidad_tabaco', '¿Cuánto?', ['class' => 'control-label']) !!}
                          {!! Form::text('cantidad_tabaco', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
                      </div>                      
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="well well-sm">
                      <label>¿Usted Consume Bebidas Alcohólicas?</label>
                      <div class="form-group">
                          <label>Alcohol</label>
                          <label class="radio-inline">
                              <input type="radio" name="alcohol" id="inlineRadio1" value="1"> Sí
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="alcohol" id="inlineRadio2" value="0"> No
                          </label>
                      </div>
                      <div class="form-group">
                          {!! Form::label('cantidad_alcohol', '¿Cuánto?', ['class' => 'control-label']) !!}
                          {!! Form::text('cantidad_alcohol', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="well well-sm">
                      <label>¿Usted Consume algún tipo de Drogas?</label>
                      <div class="form-group">
                          <label>Drogas</label>
                          <label class="radio-inline">
                              <input type="radio" name="drogas" id="inlineRadio1" value="1"> Sí
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="drogas" id="inlineRadio2" value="0"> No
                          </label>
                      </div>
                      <div class="form-group">
                          {!! Form::label('cantidad_drogas', '¿Cuánto?', ['class' => 'control-label']) !!}
                          {!! Form::text('cantidad_drogas', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
                      </div>

                  </div>
              </div>
          </div>


      </div>
    </div>
  </div>

  {{-- Familiares --}}
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
          <b>Familiares</b>
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="row">
            <div class="form-group col-sm-6">
                {!! Form::label('PADRE', 'Padre:') !!}
                {!! Form::textarea('PADRE', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('MADRE', 'Madre:') !!}
                {!! Form::textarea('MADRE', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('HERMANOS', 'Hermanos:') !!}
                {!! Form::textarea('HERMANOS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('ABUELOS_MATERNO', 'Abuelos Maternos:') !!}
                {!! Form::textarea('ABUELOS_MATERNO', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('ABUELOS_PATERNO', 'Abuelos Paternos:') !!}
                {!! Form::textarea('ABUELOS_PATERNO', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('TIOS_MATERNOS', 'Tíos Maternos:') !!}
                {!! Form::textarea('TIOS_MATERNOS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('TIOS_PATERNOS', 'Tíos Paternos:') !!}
                {!! Form::textarea('TIOS_PATERNOS', null, ['class' => 'form-control input-sm', 'placeholder' => 'Ninguno', 'size' => '1x1']) !!}
            </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Gineco-obstétricos --}}
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
          <b>Gineco-obstétricos</b>
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="row">
            <div class="form-group col-sm-6">
                {!! Form::label('MENARCA', 'Menarca (Edad):') !!}
                {!! Form::text('MENARCA', null, ['class' => 'form-control input-sm', 'placeholder' => 'Menarca (Edad)']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('FUM', 'Fecha Última Menstruación (FUM):') !!}
                {!! Form::text('FUM', null, ['class' => 'form-control input-sm', 'placeholder' => 'FUM']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('FUP', 'Fecha Último Parto (FUP):') !!}
                {!! Form::text('FUP', null, ['class' => 'form-control input-sm', 'placeholder' => 'FUP']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('GESTAS', 'Gestas:') !!}
                {!! Form::text('GESTAS', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('PARTOS', 'Partos:') !!}
                {!! Form::text('PARTOS', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('ABORTOS', 'Abortos:') !!}
                {!! Form::text('ABORTOS', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('CESAREAS', 'Cesáreas:') !!}
                {!! Form::text('CESAREAS', null, ['class' => 'form-control input-sm', 'placeholder' => '0']) !!}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
