<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
	protected $table = 'facultades';
	protected $primaryKey = 'ID_FACULTAD';
	public $timestamps = false;
}
