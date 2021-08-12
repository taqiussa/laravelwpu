<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

Route::get('/posts',[PostController::class,'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function () {
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','author','user'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post By Author : $author->name",
        // lazy eager loading, mempercepat retrieve data dari parent model
        'posts' => $author->posts->load('category','author','user'),
    ]);
});