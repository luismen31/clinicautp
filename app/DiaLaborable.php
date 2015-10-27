<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaLaborable extends Model
{
	protected $table = 'dias_laborables';
	protected $primaryKey = 'ID_DIA';
	public $timestamps = false;
}
