<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre'
    ];
    public function productos(){
    	return $this->belongsToMany('App\Models\Producto', 'producto_proveedor') 
    	->withPivot('entrada_id');
    }
    public function users(){
    	return $this->hasMany('App\Models\User');
    }
}
