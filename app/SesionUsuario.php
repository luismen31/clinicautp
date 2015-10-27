<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SesionUsuario extends Model
{
	protected $table = 'sesiones_usuarios';
	protected $primaryKey = 'ID_SESION';
	public $timestamps = false;
}
