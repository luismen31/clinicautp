<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoUsuario extends Model
{
	protected $table = 'grupos_usuarios';
	protected $primaryKey = 'ID_GRUPO_USUARIO';
	public $timestamps = false;
}
