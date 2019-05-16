<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $table = "recibos";

    protected $table = ['fecha_reci', 'descripcion'];

    public function cliente()
    {
    	return $this->belongsTo('App\Recibo', 'cliente_id');
    }
}
