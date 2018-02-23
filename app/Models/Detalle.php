<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //protected $table = 'producto_proveedor';
    protected $fillable = [
        'cantadad','cantidad','inventario_id','recibido','enviado'
    ];
    public function productos(){
    	return $this->belongsToMany('App\Models\Producto', 'producto_proveedor') 
    	->withPivot('producto_id');
    }
    
}
