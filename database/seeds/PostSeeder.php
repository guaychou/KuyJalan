<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\TempatWisata; 
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = User::all();
      $users->each(function($user){
          factory('App\Post', 5)->create([
            'user_id' => $user->id
          ]);
      });

      $tempat_wisatas = TempatWisata::all();
      $tempat_wisatas->each(function($tempat_wisatas){
          factory('App\Post', 5)->create([
            'wisata_id' => $tempat_wisatas->id
          ]);
      });
    }
}
