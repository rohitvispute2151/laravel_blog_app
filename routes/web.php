<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::latest()->with(['category','author'])->get()
    ]);
});

Route::get('posts/{post}',function  ($id){
    return view('post',[
        'post' => Post::find($id)
    ]);
});

Route::get('categories/{category:name}',function(Category $category){
    return view('posts',[
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}',function(User $author){
    return view('posts',[
        'posts' => $author->posts    
    ]);
});