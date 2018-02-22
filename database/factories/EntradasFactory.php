<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Entrada::class, function (Faker $faker) {
    return [
        //'proveedor_id'=>$faker->numberBetween($min = 1, $max = 3),
        'concepto'=>$faker->name,
        'fecha_salida'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_entrada'=> $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
