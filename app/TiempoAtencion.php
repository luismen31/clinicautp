<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiempoAtencion extends Model
{
	protected $table = 'tiempos_atencion';
	protected $primaryKey = 'ID_TIEMPO_ATENCION';
	public $timestamps = false;
}
