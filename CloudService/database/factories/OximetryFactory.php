<?php

use Faker\Generator as Faker;

$factory->define(App\Oximetry::class, function (Faker $faker) {
    return [
        'client_id' => 1,
        'value_oximetry' => rand(94,99),
        'value_pulse' => rand(50,120),
    ];
});
