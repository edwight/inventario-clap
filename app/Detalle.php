<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public function productos(){
    	return $this->belongsToMany('App\Producto', 'detalle_producto');
    }
    public function hasAnyProduct($productos)
    {
    	if (isset($productos)) 
        {
            foreach ($productos as $productosId) 
            {
                $producto = Producto::find($productosId);
                $this->productos()->attach($producto);
            }
        }
    }
    
}
