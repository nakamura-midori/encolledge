<?php

namespace App\Http\Controllers;

//use App\controller;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Post;
//use App\PostController;

use App\Post;
//use App\Http\Controllers\Controller\Post;
//use App\Console\Commands\Inspire;
use Illuminate\Http\Request;
//use Resources\views\index;

class PostController extends Controller
{
    //
    
public function index(Post $post)
{
   // return $post->get();
  // view('index');
   return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
}

public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
}
}

