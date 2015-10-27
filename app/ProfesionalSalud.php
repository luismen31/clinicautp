<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfesionalSalud extends Model
{
	protected $table = 'profesionales_salud';
	protected $primaryKey = 'ID_PROFESIONAL';
	public $timestamps = false;
}
