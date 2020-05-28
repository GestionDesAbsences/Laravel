<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classe;
use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Classe::class, function (Faker $faker) {
    return [
        'nom_classe'=>$faker->sentence,
        'id_etud'=> Etudiant::all()->random()->id,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
