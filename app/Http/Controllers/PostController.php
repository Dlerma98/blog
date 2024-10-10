<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();


        return view('posts.index', compact(var_name: 'posts'));


    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));


    }
    public function create()
    {
        return view('posts.create');
    }

    public  function store(Request $request)
    {
       $post = new Post();
       $post -> title = $request->input('title');
       $post  ->body = $request -> input('body');
       $post->save();

       return to_route('posts.index');

    }
}
