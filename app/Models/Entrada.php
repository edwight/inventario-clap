<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    public function productos(){
    	return $this->belongsToMany('App\Models\Producto', 'producto_proveedor');
    }
    public function proveedor(){
    	return $this->hasToMany('App\Models\Proveedor');
    }
}
