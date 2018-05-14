<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
    public function index()
    {
        if (Auth::user())
        {
            $output=DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->join('tempat_wisatas', 'tempat_wisatas.id', '=', 'posts.wisata_id')
            ->join('kategoris','kategoris.id','=','tempat_wisatas.id_kategori')
            ->join('kotas','kotas.id','=','tempat_wisatas.id_kota')
            ->select('users.name','posts.*','kategoris.*','kotas.*','tempat_wisatas.*')
            ->get();
            return view('index', compact('output'));
        }
        return view('getstarted');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.formAddPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        if($request->hasFile('file_foto')){
            $image = $request->file('file_foto');
            $destinationPath = public_path('/storage/posts');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
        }

        $data = [
            'user_id' => Auth::user()->id,
            'wisata_id' => $request->dropWisata,
            'caption' => $request->caption,
            'image' => 'storage/posts/' . $name,
            'like' => 0
        ];

        Post::create($data);
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
    }
    public function search(Request $request){
        $output=DB::table('users')
        ->join('posts', 'users.id', '=', 'posts.user_id')
        ->join('tempat_wisatas', 'tempat_wisatas.id', '=', 'posts.wisata_id')
        ->join('kategoris','kategoris.id','=','tempat_wisatas.id_kategori')
        ->join('kotas','kotas.id','=','tempat_wisatas.id_kota')
        ->select('users.name','posts.*','kategoris.*','kotas.*','tempat_wisatas.*')
        ->where('posts.caption', 'like', "%{$request->keyword}%")
        ->orWhere('kategoris.nama_kategori' ,'like',"%{$request->keyword}%")
        ->orWhere('kotas.nama_kota' ,'like',"%{$request->keyword}%")
        ->orWhere('tempat_wisatas.nama_tempat_wisata' ,'like',"%{$request->keyword}%")
        ->get();
        return view('index', compact('output'));
    }
}
