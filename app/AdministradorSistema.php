<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorSistema extends Model
{
	protected $table = 'administradores_sistema';
	protected $primaryKey = 'ID_ADMINISTRADOR';
	public $timestamps = false;
}
