<?php

use Faker\Generator as Faker;

$factory->define(\App\Cake::class, function (Faker $faker) {
    return [
        'cakes_name' => $faker->name,
         'cakes_price' => $faker->randomElement([100, 1000]),
        'cakes_description' => $faker->text
    ];
});