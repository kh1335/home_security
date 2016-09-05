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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/* Testing Models */
$factory->define(App\Door::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'threshold' => 'Opened',
    ];
});

$factory->define(App\GlassBreak::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'threshold' => 556.00,
        'units' => 'hz'
    ];
});

$factory->define(App\SmokeDetector::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'threshold' => 55.0,
        'units' => '&#37; Visibility'
    ];
});

$factory->define(App\Temperature::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'min_threshold' => 32.0,
        'max_threshold' => 80.0,
        'units' => '&#176;'
    ];
});

$factory->define(App\Sensor::class, function (Faker\Generator $faker) {
    return [
        'id' => 1,
        'name' => 'Test Sensor',
        'sensor_type' => 'App\Temperature',
        'sensor_id' => factory(App\Temperature::class)->make()->id,
        'sensor' => factory(App\Temperature::class)->make()
    ];
});
