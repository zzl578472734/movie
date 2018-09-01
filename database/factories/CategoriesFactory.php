<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Categories::class, function (Faker $faker) {
    return [
        'cid'  => $faker->numberBetween(0,1),
        'name' => $faker->name,
        'description' => $faker->text,
        'sort' => $faker->numberBetween(1,5),
        'status' => $faker->numberBetween(1,2),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
