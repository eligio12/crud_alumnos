<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\alumnos;
use Faker\Generator as Faker;

$factory->define(alumnos::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'password' => $faker->word,
        'codigo' => $faker->word,
        'correo' => $faker->word,
        'carrera' => $faker->word,
        'Fecha_ingreso' => $faker->word,
        'centro' => $faker->word,
        'sexo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
