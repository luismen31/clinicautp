<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReceta extends Model
{
	protected $table = 'detalles_receta';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
