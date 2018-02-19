<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'stock', 'precio','unidad','vencimiento','activo'
    ];
    public function detalles(){
    	return $this->belongsToMany('App\Detalles', 'detalle_producto');
    }
}
