<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCuadroMedicamento extends Model
{
	protected $table = 'tipos_cuadros_medicamentos';
	protected $primaryKey = 'ID_TIPO_CUADRO';
	public $timestamps = false;
}
