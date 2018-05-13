<?php

use Faker\Generator as Faker;

$factory->define(App\TempatWisata::class, function (Faker $faker) {
    return [
        'id_kota' => function(){
          return factory('App\Kota')->create()->id;
        },
        'id_kategori' => function(){
          return factory('App\Kategori')->create()->id;
        },
        'nama_tempat_wisata' =>$faker->city($maxNbChars = 29),
        'telpon'=>$faker->tollFreePhoneNumber
        
    ];
});
