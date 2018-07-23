<?php

use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    return [
        'id_question' => function () {
        	return factory(App\Question::class)->create()->id;
        },
        ''
    ];
});
