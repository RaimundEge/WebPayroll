<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->streetAddress,
        'city' => ($faker->city . ', ' . $faker->state),
        'salary' => $faker->numberBetween(3000,9900) * 10,
        'routingnumber' => $faker->bankRoutingNumber,
        'accountnumber' => $faker->bankAccountNumber,
    ];
});

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->bs,
        'expense' => $faker->numberBetween(1000,9000) * 100,
    ];
});
