<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
       // 'email'=>$faker->email,
       // 'password'=>$faker->password,
        'tel'=>$faker->e164PhoneNumber,
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
