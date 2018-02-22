<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Marca::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name
    ];
});
