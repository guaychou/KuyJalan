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
    $users = User::when($request->keyword, function ($query) use ($request) {
        $query->where('email', 'like', "%{$request->keyword}%")->orWhere('name', 'like', "%{$request->keyword}%");
    })->get();
    return view('users.paginate', compact('users'));
}
}
