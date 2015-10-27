<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedenteNoPatologico extends Model
{
	protected $table = 'antecednetes_no_patologicos';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
