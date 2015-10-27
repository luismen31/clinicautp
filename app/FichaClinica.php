<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaClinica extends Model
{
	protected $table = 'ficha_clinica';
	protected $primaryKey = 'ID_FICHA';
	public $timestamps = false;
}
