<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
	protected $table = 'sexo';
	protected $primaryKey = 'ID_SEXO';
	public $timestamps = false;
}
