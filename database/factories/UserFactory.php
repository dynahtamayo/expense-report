<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Expense;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
		'date_submitted' => $faker->date,
		'date_status' => $faker->date,
		'status' => $faker->text,
		'submit_user_id' => $faker->numberBetween($min = 1000, $max = 10000),
		'approval_user_id' => $faker->numberBetween($min = 1000, $max = 10000),
    ];
});
