<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntecedenteGinecoobstetra extends Model
{
	protected $table = 'antecedentes_ginecoobstetras';
	protected $primaryKey = 'ID_CONTROL';
	public $timestamps = false;
}
