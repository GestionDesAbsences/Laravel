<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'email'=>'admin@iset.com',
        'password'=>Hash::make('admin'),
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
