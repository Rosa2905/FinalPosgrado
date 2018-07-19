<?php

use Faker\Generator as Faker;
$factory->define(App\Alum::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'correo' => $faker->unique()->safeEmail,
        'telefono' => $faker->phoneNumber,
        'matricula'=>'123',
        'CVU'=>'assads',
        'corte' => 'uno',
        'director' => 'palafix',
        'codirector' => 'pinto',
        'campus' => 'Tijuana',
        'carrera'=> 'Compu',
        'LGAC' => 'LGAC',
        'grado' => 'MI',
        'fecha_ingreso' => $faker ->date,
        'fecha_egreso' => $faker->date,
        'fecha_ideal'=>$faker->date,
        'estatus'=> 'Vigente',
        'SAGCC'=>'SAGCC',
        'foto'=>$faker->image
    ];
});
     // $table->string('nombre');
     //        $table->string('apellido_paterno');
     //        $table->string('apellido_materno');
     //        $table->string('correo');
     //        $table->string('telefono');
     //        $table->string('corte');
     //        $table->string('director');
     //        $table->string('codirector');
     //        $table->string('campus');
     //        $table->string('carrera');
     //        $table->string('LGAC');
     //        $table->string('grado');
     //        $table->string('fecha_ingreso');
     //        $table->string('fecha_egreso');
     //        $table->string('fecha_ideal');
     //        $table->string('estatus');
     //        $table->string('SAGCC');
     //        $table->string('foto');