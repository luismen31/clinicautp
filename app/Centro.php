<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
	protected $table = 'centros';
	protected $primaryKey = 'ID_CENTRO';
	public $timestamps = false;
}
