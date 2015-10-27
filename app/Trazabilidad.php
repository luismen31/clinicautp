<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trazabilidad extends Model
{
	protected $table = 'trazabilidad';
	protected $primaryKey = 'ID_TRAZABILIDAD';
	public $timestamps = false;
}
