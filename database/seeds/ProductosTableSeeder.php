<?php

use Illuminate\Database\Seeder;
//use App\
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Producto::class, 50)->create();
    }
}
