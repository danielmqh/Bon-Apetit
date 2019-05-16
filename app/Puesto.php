<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = "puestos";

    protected $fillable = ['nombre_pst', 'salario'];

    public function articles()
    {
    	return $this->hasMany('App\Empleado', 'id_emp');
    }
}
