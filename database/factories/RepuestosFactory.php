<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Repuesto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'cod_articulo' => $faker->unique()->numberBetween(10,3000),
        'descripcion' => $faker->text(100),
        'marca' => $faker->sentence(2),
        'precio_costo' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1500.00),
        'precio_venta' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2000.00),
        'cantidad' => $faker->numberBetween(10, 100),
        'cantidad_minima' => $faker->numberBetween(5,15),
        'categoria_id' => $faker->numberBetween(1,30),

    ];
});
