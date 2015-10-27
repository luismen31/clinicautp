<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstanciaAsistencia extends Model
{
	protected $table = 'constancias_asistencias';
	protected $primaryKey = 'ID_CONSTANCIA';
	public $timestamps = false;
}
