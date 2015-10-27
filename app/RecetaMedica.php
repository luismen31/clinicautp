<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecetaMedica extends Model
{
	protected $table = 'recetas_medicas';
	protected $primaryKey = 'ID_RECETA';
	public $timestamps = false;
}
