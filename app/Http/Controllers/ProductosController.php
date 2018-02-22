<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Categoria;
use App\Models\Marca;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =  Producto::orderBy('id','desc')->get();
        $proveedores = Proveedor::all();
        return view('Producto.index',['productos'=>$productos,'proveedores'=>$proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        return view('Producto.create',compact('categorias','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->();
        

        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        //stock mayor que cero
        $producto->stock = $request->input('stock');
        $producto->unidad = $request->input('unidad');
        $producto->activo = true;

        $categoria_id = $request->input('categoria');
        $categoria = Categoria::find($categoria_id);
        $producto->categoria()->associate($categoria);

        $marca_id = $request->input('marca');
        $marca = Marca::find($marca_id);
        $producto->marca()->associate($marca);
        
        $producto->save();
        //$categoria_id = $request->input('categoria');
        //$categoria = Categoria::find($categoria_id);
        //$categoria->productos()->save()
        //$producto->categoria->nombre =$request->input('categoria');
        //$producto->marca->nombre = $request->input('marca');
        

        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        //return $producto->categoria->id;
        return view('Producto.show',['producto'=>$producto]);
        //return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $marcas = Marca::all();
        return view('Producto.edit',compact('producto','categorias','marcas'));
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
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        //stock mayor que cero
        $producto->stock = $request->input('stock');
        $producto->unidad = $request->input('unidad');
        $producto->activo = true;

        $categoria_id = $request->input('categoria');
        $categoria = Categoria::find($categoria_id);
        $producto->categoria()->associate($categoria);

        $marca_id = $request->input('marca');
        $marca = Marca::find($marca_id);
        $producto->marca()->associate($marca);
        
        $producto->save();

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    }
}
