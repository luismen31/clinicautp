<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedenteFamiliar extends Model
{
	protected $table = 'antecedentes_familiares';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
