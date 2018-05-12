<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;

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
            $posts = Post::all();
            return view('index', compact('posts'));
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
        //
    }
}
