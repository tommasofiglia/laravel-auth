<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      // Con  latest()->get() mi richiamo tutti i posts come farei con ::all(), solo che
      // sono ordinati dall'ultimo al primo
      $posts = Post::latest()->get();
      return view('guests.posts.index', compact('posts'));
    }
}
