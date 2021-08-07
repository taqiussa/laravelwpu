<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view('posts',
        [
            'title' => 'Blog',
            'posts' => Post::all(),
        ]);
    }
    
    public function show(Post $post){
        return view('post',
        [
            'title' => 'Single Post',
            'post' => $post,
        ]);
        // show(Post adalah MOdel, $post adalah binding variable untuk modelnya)
    }
}
