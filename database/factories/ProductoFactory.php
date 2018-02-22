<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'stock' => $faker->randomDigit,
        'precio' => $faker->randomDigit,
        'unidad' => 'kilos',
        'vencimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'activo' => true,
        'categoria_id'=>$faker->numberBetween($min = 1, $max = 10),
        'marca_id'=>$faker->numberBetween($min = 1, $max = 5),
    ];
});
/*
$factory->defineAs(App\Producto::class, 'inactive', function ($faker) {
    return [
        'nombre' => $faker->name,
        'stock' => $faker->randomDigit,
        'precio' => $faker->randomDigit,
        'unidad' => 'kilos',
        'vencimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'activo' => false,
    ];
});
*/
