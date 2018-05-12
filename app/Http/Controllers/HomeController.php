<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function paginate(\Illuminate\Http\Request $request){
    $posts = post::when($request->keyword, function ($query) use ($request) {
        $query->where('caption', 'like', "%{$request->keyword}%");
     })->get();
    return view('posts.paginate', compact('posts'));
}
}
