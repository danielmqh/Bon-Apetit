<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = "platos";
    
    protected $fillable = ['nombre_plato', 'precio_plato'];

    public function tipo_plato()
    {
    	return $this->hasMany('App\Tpo_plato', 'id_tiplato');
    }

    public function tipo_plato()
    {
    	return $this->belongsTo('App\Recerva', 'tipo_plato_id');
    }

    public function insumo_plato()
    {
    	return $this->belongsTo('App\Insumo_plato', 'insumo_plato_id');
    }
	
	public function cocinero_plato()
	{
		return $this->belongsTo('App\Cocinero_plato', 'cocinero_plato_id');
	}
}
