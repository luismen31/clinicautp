<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLaboratorio extends Model
{
	protected $table = 'tipos_laboratorios';
	protected $primaryKey = 'ID_TIPO_LABORATORIO';
	public $timestamps = false;
}
