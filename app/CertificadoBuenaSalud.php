<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificadoBuenaSalud extends Model
{
	protected $table = 'certificados_buena_salud';
	protected $primaryKey = 'ID_CERTIFICADO';
	public $timestamps = false;
}
