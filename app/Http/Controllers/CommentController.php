<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  /**
     * Return the user attributes.

     * @return array
     */
    public static function getAuthor($id)
    {
        $user = self::find($id);
        return [
            'id'     => $user->id,
            'name'   => $user->name,
            'email'  => $user->email,
            'url'    => '',  // Optional
            'avatar' => 'gravatar',  // Default avatar
            'admin'  => $user->role === 'admin', // bool
        ];
    }
    public function index (){
        return view('vendor/laravelLikeComment/comment');
    }

}
