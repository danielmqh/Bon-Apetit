<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	protected $table = "mesas";

    protected $table = ['numero_mesa', 'descripcion_mesa'];

    public function pedido()
    {
    	return $this->hasMany('App\Pedido', 'id_ped');
    }
}
