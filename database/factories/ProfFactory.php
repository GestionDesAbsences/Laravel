<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prof;
use App\Admin;
use Faker\Generator as Faker;

$factory->define(Prof::class, function (Faker $faker) {
    return [
        'id_admin'=>Admin::all()->random()->id_admin,
        'name'=>$faker->name,
       // 'email'=>$faker->email,
       // 'password'=>$faker->password,
        'tel'=>$faker->e164PhoneNumber,
        'created_at'=>now(),
        'updated_at'=>now(),
        

    ];
});
