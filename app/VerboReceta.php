<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerboReceta extends Model
{
	protected $table = 'verbos_recetas';
	protected $primaryKey = 'ID_VERBO';
	public $timestamps = false;
}
