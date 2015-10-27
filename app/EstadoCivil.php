<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
	protected $table = 'estados_civiles';
	protected $primaryKey = 'ID_ESTADO_CIVIL';
	public $timestamps = false;
}
