<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionCita extends Model
{
	protected $table = 'notificaciones_citas';
	protected $primaryKey = 'ID_NOTIFICACION';
	public $timestamps = false;
}
