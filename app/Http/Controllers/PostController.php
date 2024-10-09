<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
          $posts = Post::get();


          return view('blog',compact(var_name: 'posts'));



    }
}
