<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = "turnos";

    protected $fillable = ['hora_inicio', 'hora_salida'];

    public function trabajador()
    {
    	return $this->hasMany('App\Trabajador', 'id_trabaja');
    }
}
