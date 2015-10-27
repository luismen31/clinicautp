<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioMedico extends Model
{
	protected $table = 'servicios_medicos';
	protected $primaryKey = 'ID_SERVICIO';
	public $timestamps = false;
}
