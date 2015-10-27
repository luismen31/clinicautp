<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
	protected $table = 'clinicas';
	protected $primaryKey = 'ID_CLINICA';
	public $timestamps = false;
}
