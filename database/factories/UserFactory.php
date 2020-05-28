<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $roleUsers = ['prof','etudiant', 'admin']; // role par default
    $randRole = $roleUsers[array_rand($roleUsers)]; // choisir un role 
    $password = ($randRole === 'admin' ? 'admin' : '12345678'); //mot de passe 'admin' si le role est admin
                                                                // sinon le mot de passe sera '123456789'
    return [
        //'name' => $faker->name,
        'email'=> str_random(10).'@gmail.com',
        'password'=>Hash::make($password),
        'email_verified_at' => now(),
        'role' => $randRole,
        'remember_token' => Str::random(10),
    ];
});
