<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSanguineo extends Model
{
	protected $table = 'tipos_sanguineos';
	protected $primaryKey = 'ID_TIPO_SANGUINEO';
	public $timestamps = false;
}
