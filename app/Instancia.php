<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instancia extends Model
{
	protected $table = 'instancias';
	protected $primaryKey = 'ID_INSTANCIA';
	public $timestamps = false;
}
