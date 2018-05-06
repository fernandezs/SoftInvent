<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Empleado::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName. ' '.$faker->lastName,
        'fecha_ingreso' => $faker->date,
    ];
});
