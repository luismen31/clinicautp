<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
	protected $table = 'provincias';
	protected $primaryKey = 'ID_PROVINCIA';
	public $timestamps = false;
}
