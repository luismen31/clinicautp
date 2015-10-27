<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleRecetaLaboratorio extends Model
{
	protected $table = 'detalles_receta_laboratorio';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
