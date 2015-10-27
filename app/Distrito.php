<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
	protected $table = 'distritos';
	protected $primaryKey = 'ID_DISTRITO';
	public $timestamps = false;
}
