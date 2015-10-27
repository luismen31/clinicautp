<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedentePatologico extends Model
{
	protected $table = 'antecedentes_patologicos';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
