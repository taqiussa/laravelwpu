<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'name' => 'Taqius SA',
        'email' => 'taqiussa@gmail.com',
        'image' => 'FOTO IJAZAH2.png',
    ]);
});

Route::get('/posts', function () {

    return view('blog',[
        'title' => 'Blog',
        'posts' => Post::all(),
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    
    Return view('post',[
        'title' => 'Single Post',
        'post' => Post::find($slug),
    ]);
});