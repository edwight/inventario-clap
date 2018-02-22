<?php

use Illuminate\Database\Seeder;
use App\Models\Proveedor;
class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = new Proveedor;
        $proveedor->nombre = 'centro de acopio';
        //privilegios
        $proveedor->save();

        $proveedor = new Proveedor;
        $proveedor->nombre = 'centro de distribucion';
        //privilegios
        $proveedor->save();

        $proveedor = new Proveedor;
        $proveedor->nombre = 'clap';
        //privilegios
        $proveedor->save();
    }
}
