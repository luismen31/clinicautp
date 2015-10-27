<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificadoIncapacidad extends Model
{
	protected $table = 'certificados_incapacidad';
	protected $primaryKey = 'ID_INCAPACIDAD';
	public $timestamps = false;
}
