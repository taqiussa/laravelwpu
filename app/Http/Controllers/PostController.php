<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $title = '';
            if(request('category')){
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in ' . $category->name;
            }
            if(request('author')){
                $author = User::firstWhere('username', request('author'));
                $title = ' in ' . $author->name;
            }
        return view('posts',
        [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            //Lazy Loading, menarik post dan author dan category secara berulang, membebani query database
            // 'posts' => Post::all()
            //Eager Loading Menghindari N+1 Problems
            // 'posts' => Post::with(['author','category','user'])->latest()->get(),
            // sudah di eager loading dari Post Model
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
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
