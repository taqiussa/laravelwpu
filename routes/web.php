<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts',[PostController::class,'index']);

// Halaman single post
Route::get('posts/{slug}', [PostController::class,'show']);