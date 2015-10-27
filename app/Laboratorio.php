<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
	protected $table = 'laboratorios';
	protected $primaryKey = 'ID_LABORATORIO';
	public $timestamps = false;
}
