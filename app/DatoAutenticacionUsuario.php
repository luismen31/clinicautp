<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoAutenticacionUsuario extends Model
{
	protected $table = 'datos_autenticacion_usuario';
	protected $primaryKey = 'ID_USUARIO';
	public $timestamps = false;
}
