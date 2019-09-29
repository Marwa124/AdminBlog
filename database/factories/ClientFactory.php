<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [

        'title' => $faker->jobTitle ,
        'description' => $faker->paragraph,
        'status' => $faker->word,
        'phone' => $faker->e164PhoneNumber,

    ];
});
