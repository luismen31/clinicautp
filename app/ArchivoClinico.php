<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoClinico extends Model
{
	protected $table = 'archivo_clinico';
	protected $primaryKey = 'ID_ARCHIVO';
	public $timestamps = false;
}
