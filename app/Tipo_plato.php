<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_plato extends Model
{
    protected $table = "tipo_platos";

    protected $fillable = ['nombre'];

    public function plato()
    {
    	return $this->belongsTo('App\Plato', 'plato_id');
    }
}
