<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProfesional extends Model
{
	protected $table = 'tipos_profesionales';
	protected $primaryKey = 'ID_TIPO_PROFESIONAL';
	public $timestamps = false;
}
