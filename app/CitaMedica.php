<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
{
	protected $table = 'citas_medicas';
	protected $primaryKey = 'ID_CITA';
	public $timestamps = false;
}
