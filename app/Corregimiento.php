<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corregimiento extends Model
{
	protected $table = 'corregimientos';
	protected $primaryKey = 'ID_CORREGIMIENTO';
	public $timestamps = false;
}
