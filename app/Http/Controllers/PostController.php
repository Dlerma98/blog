<?php

namespace App\Http\Controllers;

class PostController
{
      public function __invoke()
      {
          $posts = [
              ['title' => 'post 1'],
              ['title' => 'post 2'],
              ['title' => 'post 3'],
              ['title' => 'post 4'],
          ];
          return view('blog',compact(var_name: 'posts'));
    


    }
}
