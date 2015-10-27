<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNoPatologico extends Model
{
	protected $table = 'tipos_no_patologicos';
	protected $primaryKey = 'ID_TIPO_NO_PATOLOGICO';
	public $timestamps = false;
}
