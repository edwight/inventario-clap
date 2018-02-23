<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Detalle;
class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =  Producto::all();
        $proveedores = Proveedor::all();
        return view('Detalles.index',['productos'=>$productos,'proveedores'=>$proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        

        //$detalle = new Detalle;
        //$detalle->cantidad = $request->input('cantidad');
        //$detalle->unidad = 'kilos';
        //$detalle->entrada->user-> = true;
        //$detalle->proveedor = 3;
        //$detalle->save();

        $detalle = new Detalle;
        //$detalle->user_id = $request->input('user');
        $proveedor = $request->input('proveedor');
        $detalle->proveedor_id = $request->input('proveedor');
        $detalle->cantidad = 24;
        $detalle->enviado = true;
        $detalle->save();

        //$proveedor_id =$request->input('proveedor');
        //$proveedor = Proveedor::find($proveedor_id);
        //$detalle->proveedor->save($proveedor);


        $productos = $request->input('productos_ids');


        //return $productos;
        //$detalle->hasAnyProduct($productos_id);

        
        if (isset($productos)) 
        {
            foreach ($productos as $productosId) 
            {
                $producto = Producto::find($productosId);
                $detalle->productos()->attach($producto,['proveedor_id' => $proveedor]);
            }
        }
        
        return redirect('detalles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
