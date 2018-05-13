<?php

use Faker\Generator as Faker;

$factory->define(App\Kategori::class, function (Faker $faker) {
    return [
        'nama_kategori'=>$faker->name($maxNbChars = 30)
    ];
});
