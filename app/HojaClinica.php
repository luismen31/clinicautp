<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaClinica extends Model
{
	protected $table = 'hoja_clinica';
	protected $primaryKey = 'ID_HOJA';
	public $timestamps = false;
}
