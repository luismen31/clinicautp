<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPaciente extends Model
{
	protected $table = 'categoria_paciente';
	protected $primaryKey = 'ID_CATEGORIA';
	public $timestamps = false;
}
