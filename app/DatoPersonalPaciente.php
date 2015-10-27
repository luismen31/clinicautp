<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoPersonalPaciente extends Model
{
	protected $table = 'datos_personales_paciente';
	protected $primaryKey = 'NO_CEDULA';
	public $timestamps = false;
}
