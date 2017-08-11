<?php

use App\Area;
use App\Caso;
use App\User;
use App\Envio;
use App\Archivo;
use App\Documento;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

#factory para Area
$factory->define(Area::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->sentence(2),
        'codigo' => $faker->word,
        'descripcion' => $faker->paragraph(1),
        'estado' => $faker->randomElement([Area::AREA_ACTIVA, Area::AREA_INACTIVA]),
    ];
});

#factory para User
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => $faker->name,
        'username' => $faker->username,
        'descripcion' => $faker->paragraph(1),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'avatar' => $faker->randomElement(['1.jpg', '2.pdf', '3.dox']),
        'estado' => $faker->randomElement([User::USUARIO_ACTIVO, User::USUARIO_INACTIVO]),
        'admin' => $faker->randomElement([User::USUARIO_ADMINISTRADOR, User::USUARIO_NO_ADMINISTRADOR]),
        'area_id' => Area::all()->random()->id,
        'remember_token' => str_random(10),
    ];
});

#factory para Envio
$factory->define(Envio::class, function (Faker\Generator $faker) {
    $user = User::all()->random()->id;
    $destinatario = User::all()->except($user)->random()->id;

    return [
        'contenido' => $faker->sentence(2),
        'observacion' => $faker->paragraph(1),
        'fechaEnvio' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fechaLlegada' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'estado' => $faker->randomElement([Envio::ENVIO_NO_FINALIZADO, Envio::ENVIO_FINALIZADO]),
        'user_id' => $user,
        'destinatario_id' => $destinatario,
    ];
});

#factory para Caso
$factory->define(Caso::class, function (Faker\Generator $faker) {
    
    return [
        'titulo' => $faker->sentence(3),
        'contenido' => $faker->paragraph(1),
        'conclusion' => $faker->sentence(5),
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => User::all()->random()->id,
    ];
});

#factory para Archivo
$factory->define(Archivo::class, function (Faker\Generator $faker) {
    
    return [
        'nombre' => $faker->sentence(3),
        'caso_id' => Caso::all()->random()->id,
    ];
});

#factory para Documento
$factory->define(Documento::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->sentence(2),
        'descripcion' => $faker->paragraph(1),
        'estado' => $faker->randomElement([Documento::DOC_DISPONIBLE, Documento::DOC_NO_DISPLONIBLE]),
        'tipo' => $faker->randomElement(['PROCEDIMIENTO', 'INSTRUCTIVO']),
        'archivo' => $faker->randomElement(['4.jpg', '5.pdf', '6.dox']),
        'area_id' => Area::all()->random()->id,
    ];
});