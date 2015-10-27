<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoTratamiento extends Model
{
	protected $table = 'periodos_tratamiento';
	protected $primaryKey = 'ID_PERIODO';
	public $timestamps = false;
}
