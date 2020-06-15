<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seance;
use App\Classe;
use App\Prof;
use Faker\Generator as Faker;

$factory->define(Seance::class, function (Faker $faker) {
    return [
        'date_debut'=>$faker->date,
        'date_fin'=>$faker->date,
        'matiere'=>$faker->sentence,
        'id_prof'=>Prof::all()->random()->id,
        'id_classe'=>Classe::all()->random()->id_classe,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
