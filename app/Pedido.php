<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $table = ['cantida_pedido', 'fecha_pedido'];

    public function cliente()
    {
    	return $this->belongsTo('App\Clinete', 'cliente_id');
    }

    public function menu()
    {
    	return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function mesa()
    {
        return $this->belongsTo('App\Mesa', 'mesa_id');
    }

    public function recibo()
    {
        return $this->hasMany('App\Recibo', 'id_reci');
    }
}
