<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

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

    $posts = cache()->remember('/', now()->addSeconds(5), function(){
        return Post::all();
    });
    return view('posts', [
        'posts' => $posts,
    ]);
});

Route::get('posts/{post:slug}', function (Post $post){

    $post = cache()->remember('posts/{post:slug}', now()->addSeconds(5), function() use ($post){
        return $post;
    });

    return view('post', [
        'post' => $post,
    ]);
});
Route::get('categories/{category:slug}', function (Category $category){

    // $category = cache()->remember('categories/{category:slug}', now()->addSeconds(5), function() use ($category){
    //     return $category;
    // });

    return view('posts', [
        'posts' => $category->posts,
    ]);
});
