<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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
    $latestPosts = Post::latest()->take(3)->get();
    return view('welcome', ['title' => 'Home', 'latestPosts' => $latestPosts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    // eager loading, with()
    // scope from model post
    return view('posts', ['title' => 'Posts', 'posts' => Post::filter(request(['search', 'author']))->latest()->paginate(6)->withQueryString()]);
})->name('posts');

// Route Model Binding
// Route::get('/posts/{post:slug}', function (Post $post) {
//     return view('post', ['title' => $post->title, 'post' => $post]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);