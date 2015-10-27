<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecialidadMedica extends Model
{
	protected $table = 'especialidades_medicas';
	protected $primaryKey = 'ID_ESPECIALIDAD_MEDICA';
	public $timestamps = false;
}
