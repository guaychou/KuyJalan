<?php

use Faker\Generator as Faker;

$factory->define(App\TempatWisata::class, function (Faker $faker) {
    return [
        'id_kota' => function(){
          return factory('App\Kota')->create()->id;
        },
        'nama' =>$faker->city,
        'telpon'=>$faker->tollFreePhoneNumber,
        'id_kategori' => function(){
          return factory('App\Kategori')->create()->id;
        }
    ];
});
