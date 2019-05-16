<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $table = ['nombre_clien', 'ap_paterno_clien', 'ap_materno_clien', 'dni_clien', 'fecha_naci_clien'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function recervacion()
    {
    	return $this->belongsTo('App\recervacion', 'recervacion_id');
    }

    public function pedido()
    {
        return $this->hasOne('App\pedido', 'id_ped');
    }
}
