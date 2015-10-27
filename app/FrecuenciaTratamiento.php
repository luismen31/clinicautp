<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrecuenciaTratamiento extends Model
{
	protected $table = 'frecuencias_tratamiento';
	protected $primaryKey = 'ID_FRECUENCIA';
	public $timestamps = false;
}
