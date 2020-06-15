<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prof;
use App\User;
use Faker\Generator as Faker;

$factory->define(Prof::class, function (Faker $faker) {
    return [
        'id_user'=>User::where('role','prof')->inRandomOrder()->first()->id,
        'name'=>$faker->name,
        'tel'=>$faker->e164PhoneNumber,
        'created_at'=>now(),
        'updated_at'=>now(),
        

    ];
});
