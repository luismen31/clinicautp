<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaFarmaceutica extends Model
{
	protected $table = 'formas_farmaceuticas';
	protected $primaryKey = 'ID_TIPO_FORMA';
	public $timestamps = false;
}
