<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'stock', 'precio','unidad','vencimiento','activo'
    ];
    public function proveedores(){
    	return $this->belongsToMany('App\Models\Proveedor', 'producto_proveedor') 
        ->withPivot('producto_id','enviado','recibido','stock_pivot');
    }
    public function detalles(){
        return $this->belongsToMany('App\Models\Detalle', 'producto_proveedor') 
        ->withPivot('stock_pivot','proveedor_id');
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
