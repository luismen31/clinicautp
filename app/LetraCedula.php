<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetraCedula extends Model
{
	protected $table = 'letras_cedulas';
	protected $primaryKey = 'CED_LETRA';
	public $timestamps = false;
}
