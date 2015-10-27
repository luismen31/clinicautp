<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPatologico extends Model
{
	protected $table = 'tipos_patologicos';
	protected $primaryKey = 'ID_TIPO_PATOLOGICO';
	public $timestamps = false;
}
