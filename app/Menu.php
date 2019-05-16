<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    protected $table = ['nombre_men', 'cantidad_men', 'descripcion_men'];

    public function pedido()
    {
    	return $this->hasMany('App\Pedido', 'id_ped');
    }
}
