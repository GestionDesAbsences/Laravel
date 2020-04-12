<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absence;
use App\Etudiant;
use App\Seance;
use Faker\Generator as Faker;

$factory->define(Absence::class, function (Faker $faker) {
    return [
        'id_etud'=> Etudiant::all()->random()->id_etud,
        'id_seance'=>Seance::all()->random()->id_seance,
        'retard'=>$faker->boolean,
        'absences'=>$faker->boolean,
    ];
});
