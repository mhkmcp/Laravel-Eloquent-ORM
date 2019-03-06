<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('post', compact('posts'));
    }

    public function posts_by_user()
    {
    	$posts = Post::where('user_id', 2)->get();
    	return view('posts_by_user', compact('posts'));
    }
}
