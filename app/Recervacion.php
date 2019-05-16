<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recervacion extends Model
{
    protected $table = "recervaciones";

    protected $table = ['fecha_res', 'inicio_res', 'final_res'];

    public function user()
    {
    	return $this->belongsTo('App\Empleado', 'empleado_id');
    }

    public function clientes()
    {
        return $this->hasMany('App\Cliente', 'id_clien');
    }
}
