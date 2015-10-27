<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFamiliar extends Model
{
	protected $table = 'tipos_familiares';
	protected $primaryKey = 'ID_TIPO_FAMILIAR';
	public $timestamps = false;
}
