    <div class="row">
        <div class="col-sm-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <center>
                            {!! Form::label('FOTO_PERSONAL', 'Paciente', array('class' => 'control-label')) !!}
                            <div class="text-center">
                                {!! Html::image('img/user_image.png', 'Foto Paciente', ['id' => 'img-personal', 'class' => 'img-personal']) !!}
                            </div>
                        </center>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="text-center">
                            <ul class="list-unstyled">
                              <li>Juanito Perez</li>
                              <li>Masculino</li>
                              <li>23 años [01/01/1989]</li>
                              <li>2-123-456</li>
                              <li>O+</li>
                              <li>Estudiante</li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-info-circle"></i>
                        <strong>Antecendentes</strong>
                        <small class="small-font">(Información clínica sobre el paciente)</small>
                    </h3>
                </div>
                <div class="panel-body">
                    <button class="btn btn-primary btn-outline btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Patológicos</button>
                    <button class="btn btn-primary btn-outline btn-sm"><i class="glyphicon glyphicon-eye-open"></i> No Patológicos</button>
                    <button class="btn btn-primary btn-outline btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Familiares</button>
                    <button class="btn btn-primary btn-outline btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Gineco-obstétricos</button>
                </div>
            </div>
        </div>
    </div>