<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Employee;
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

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(20,60),
        'organisation_id' => $faker->numberBetween(1,3),
        'job' => $faker->randomElement(['Sales', 'Engineer']),
    ];
});
