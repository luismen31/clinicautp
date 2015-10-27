<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoAtencion extends Model
{
	protected $table = 'estados_atencion';
	protected $primaryKey = 'ID_ESTADO_ATENCION';
	public $timestamps = false;
}
