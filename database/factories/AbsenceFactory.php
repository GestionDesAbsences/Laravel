<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absence;
use App\Etudiant;
use App\Prof;
use App\Seance;
use Faker\Generator as Faker;

$factory->define(Absence::class, function (Faker $faker) {
    return [
        'id_prof'=> Prof::all()->random()->id,
        'id_seance'=>Seance::all()->random()->id_seance,
        'retard'=>$faker->boolean,
        'absences'=>$faker->boolean,
    ];
});
