<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    public function productos(){
    	return $this->belongsToMany('App\Models\Producto', 'entrada_producto');
    }
    public function proveedor(){
    	return $this->hasToMany('App\Models\Proveedor');
    }
}
