<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use App\User;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'id_user'=>User::where('role','etudiant')->inRandomOrder()->first()->id,
        'tel'=>$faker->e164PhoneNumber,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
