<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecetaLaboratio extends Model
{
	protected $table = 'recetas_laboratorios';
	protected $primaryKey = 'ID_RECETA_LABORATORIO';
	public $timestamps = false;
}
