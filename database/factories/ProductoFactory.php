<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'stock' => $faker->randomDigit,
        'precio' => $faker->randomDigit,
        'unidad' => 'kilos',
        'vencimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'activo' => true,
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
