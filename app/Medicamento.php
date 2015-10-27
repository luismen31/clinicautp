<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
	protected $table = 'medicamentos';
	protected $primaryKey = 'ID_MEDICAMENTO';
	public $timestamps = false;
}
