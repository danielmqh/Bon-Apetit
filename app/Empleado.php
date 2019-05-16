<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";

    protected $table = ['nombre_empleado', 'ap_paterno_emp', 'ap_materno_emp', 'fecha_naci_emp', 'genero', 'telefono', 'direccion', 'fache_incio_emp', 'fecha_final_emp'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function puesto()
    {
    	return $this->belongsTo('App\Puesto', 'puesto_id');
    }

    public function recervacion()
    {
        return $this->hasMany('App\Recervacion', 'id_res');
    }
}
