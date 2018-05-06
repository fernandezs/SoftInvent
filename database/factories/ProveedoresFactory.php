<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Proveedor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'nombre_contacto' => $faker->firstName. ' '.$faker->lastName,
        'telefono' => $faker->phoneNumber,
        'pagina_web' => $faker->domainName,
        'email' => $faker->companyEmail,
        'domicilio' => $faker->address,
        'cod_postal' => $faker->numberBetween(1000,9999),
    ];
});
