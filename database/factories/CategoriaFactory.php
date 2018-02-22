<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name
    ];
});
