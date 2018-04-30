<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
class LikeSeeder extends Seeder
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
          factory('App\Like', 5)->create([
            'user_id' => $user->id
          ]);
      });
      $post = Post::all();
      $post->each(function($post){
        factory('App\Like',5)->create([
          'post_id'=> $post->id
        ]);
      });
    }
}
