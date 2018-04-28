<?php

use Illuminate\Database\Seeder;
use App\User; 
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
    }
}
