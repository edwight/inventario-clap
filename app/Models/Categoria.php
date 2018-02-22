<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	public $timestamps = false;
    protected $fillable = [
        'nombre'
    ];
    public function productos(){
    	return $this->hasToMany('App\Models\Producto');
    }
}
