<?php

use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'id_user' => $faker->randomDigit(),
        'name' => $faker->cityPrefix()
    ];
});
