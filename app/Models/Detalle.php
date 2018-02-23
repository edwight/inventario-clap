<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'producto_proveedor';
    protected $fillable = [
        'cantadad'
    ];
    public function productos(){
    	return $this->belongsToMany('App\Producto', 'producto_proveedor');
    }
    
}
