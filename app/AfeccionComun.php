<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfeccionComun extends Model
{
	protected $table = 'afecciones_comunes';
	protected $primaryKey = 'ID_TIPO_AFECCION';
	public $timestamps = false;
}
