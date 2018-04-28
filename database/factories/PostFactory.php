<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'user_id' => function(){
        return factory('App\User')->create()->id;
      },
        'caption' => $faker->paragraph,
        'image' => 'posts/' . $faker->image('public/storage/posts', 800, 600, null, false),
        'like' => $faker->randomNumber
    ];
});
