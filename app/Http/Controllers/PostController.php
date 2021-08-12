<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view('posts',
        [
            'title' => "All Post",
            //Lazy Loading, menarik post dan author dan category secara berulang, membebani query database
            // 'posts' => Post::all()
            //Eager Loading Menghindari N+1 Problems
            'posts' => Post::with(['author','category','user'])->latest()->get(),
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
