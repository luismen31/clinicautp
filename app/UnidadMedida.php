<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
	protected $table = 'unidades_medida';
	protected $primaryKey = 'ID_TIPO_UNIDAD_MEDIDA';
	public $timestamps = false;
}
