<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HelloController extends Controller
{
    //

    public function hello(){
return "Hello from Laravel's first practical lesson!";
}

public function posts() {
 $posts = Post::all();
 return view('posts', compact('posts'));
 }
}
