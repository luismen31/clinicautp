<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoProfesionalSalud extends Model
{
	protected $table = 'datos_profesionales_salud';
	protected $primaryKey = 'NO_CEDULA';
	public $timestamps = false;
}
