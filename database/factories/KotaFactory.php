<?php

use Faker\Generator as Faker;
$factory->define(App\Kota::class, function (Faker $faker) {
    return [
      'nama_kota' => $faker->state
    ];
});
