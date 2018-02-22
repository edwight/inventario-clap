<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'stock', 'precio','unidad','vencimiento','activo'
    ];
    public function entradas(){
    	return $this->belongsToMany('App\Models\Entrada', 'entrada_producto');
    }
    public function salidas(){
        return $this->belongsToMany('App\Models\Salida', 'detalle_producto');
    }
    public function categoria(){
    	return $this->belongsTo('App\Models\Categoria');
    }
    public function marca(){
    	return $this->belongsTo('App\Models\Marca');
    }
}
