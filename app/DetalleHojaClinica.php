<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleHojaClinica extends Model
{
	protected $table = 'detalles_hoja_clinica';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
