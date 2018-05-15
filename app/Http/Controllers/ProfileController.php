<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index(){
        if (Auth::user())
        {
            $name=Auth::user()->name;
            $user=DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->join('tempat_wisatas', 'tempat_wisatas.id', '=', 'posts.wisata_id')
            ->join('kategoris','kategoris.id','=','tempat_wisatas.id_kategori')
            ->join('kotas','kotas.id','=','tempat_wisatas.id_kota')
            ->select('users.*','posts.*','kategoris.*','kotas.*','tempat_wisatas.*')
            ->where('users.name','=',$name)
            ->get();

            $count=DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->where('users.name','=',$name)
            ->count();
            return view('profile', compact('user','count'));
        }
    }
}
