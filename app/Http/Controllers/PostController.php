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
            'active' => 'posts',
            //Lazy Loading, menarik post dan author dan category secara berulang, membebani query database
            // 'posts' => Post::all()
            //Eager Loading Menghindari N+1 Problems
            // 'posts' => Post::with(['author','category','user'])->latest()->get(),
            // sudah di eager loading dari Post Model
            'posts' => Post::latest()->filter(request(['search','category','author']))->get(),
        ]);
    }
    
    public function show(Post $post){
        return view('post',
        [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post,
        ]);
        // show(Post adalah MOdel, $post adalah binding variable untuk modelnya)
    }
}
