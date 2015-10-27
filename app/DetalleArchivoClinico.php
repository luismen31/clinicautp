<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleArchivoClinico extends Model
{
	protected $table = 'detalles_archivo_clinico';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
