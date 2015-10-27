<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaDeReferencia extends Model
{
	protected $table = 'hoja_de_referencia';
	protected $primaryKey = 'ID_HOJA_DE_REFERENCIA';
	public $timestamps = false;
}
