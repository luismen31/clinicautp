<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
	protected $table = 'nacionalidades';
	protected $primaryKey = 'ID_NACIONALIDAD';
	public $timestamps = false;
}
