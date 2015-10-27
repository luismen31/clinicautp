<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCaracter extends Model
{
	protected $table = 'tipos_caracteres';
	protected $primaryKey = 'ID_CARACTER';
	public $timestamps = false;
}
