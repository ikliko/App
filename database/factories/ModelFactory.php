<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'forename' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Book::class, function (\Faker\Generator $faker) {
    return [
        'title' => $faker->realText(200),
        'author' => $faker->name,
        'resume' => $faker->realText(500),
        'publish' => $faker->date('Y-m-d', date("Y-m-d", mt_rand(1062055681, 1262055681))),
        'isbn'=> $faker->uuid,
        'user_id'=> rand(1,10)
    ];
});
