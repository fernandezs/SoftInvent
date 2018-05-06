<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'num_cliente' => $faker->numberBetween(0,200),
        'nombre' => $faker->firstName. ' '.$faker->lastName,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->email,
        'doc_tipo' => $faker->randomElement(['DNI', 'CUIT', 'Cedula']),
        'doc_numero' => $faker->numberBetWeen(35000000, 94000000),
        'tipo' => $faker->randomElement(['Consumidor Final','Empleado','Monotributista','Responsable Inscripto','Revendedor','Comerciante','Gremio']),
        'direccion' => $faker->address,
    ];
});
