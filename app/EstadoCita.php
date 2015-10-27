<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCita extends Model
{
	protected $table = 'estados_citas';
	protected $primaryKey = 'ID_ESTADO_CITA';
	public $timestamps = false;
}
