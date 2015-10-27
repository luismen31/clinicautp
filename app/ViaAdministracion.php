<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViaAdministracion extends Model
{
	protected $table = 'vias_administracion';
	protected $primaryKey = 'ID_VIA';
	public $timestamps = false;
}
