<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'ID_PACIENTE';
	public $timestamps = false;
}
