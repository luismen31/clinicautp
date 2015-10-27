<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaSeguridad extends Model
{
	protected $table = 'preguntas_seguridad';
	protected $primaryKey = 'ID_PREGUNTA';
	public $timestamps = false;
}
