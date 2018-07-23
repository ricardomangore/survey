<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'id_user' => function(){
        	return factory(App\User::class)->create()->id;
        },
        'name' => $faker->cityPrefix()
    ];
});
