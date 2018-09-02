<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Movies::class, function (Faker $faker) {

    return [
        'url' => $faker->imageUrl(),
        'name' => $faker->text,
        'description' => $faker->text,
        'release_area' => $faker->city,
        'director' => $faker->name,
        'actor' => $faker->name,
        'hits' => $faker->numberBetween(0, 100000),
        'score' => $faker->randomFloat(2, 0.0, 10.0),
        'comment_number' => $faker->numberBetween(0, 100000),
        'sort' => $faker->numberBetween(0, 100),
        'status' => $faker->numberBetween(1, 2),
        'release_at' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
