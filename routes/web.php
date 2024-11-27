<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Route;
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
    return view('home', [
        'title' => 'HOME',
        "active" => '/',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'ABOUT',
        "active" => '/about',
        'nama' => 'aldirisky pratama',
        'email' => 'aldijinkpro27@gmail.com',
        'img' => 'aldik.jpg'
    ]);
});

Route::get('/posts', [PostController::class, 'index']
    // return view('/posts', [
    //     'title' => 'POSTS',
    //     'posts' => Post::all()
    // ]);
);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']
// $new_post = [];
// Foreach($blog_posts as $post){
//     if($post['slug'] == $slug){
//         $new_post = $post;
//     }
// }

    // return view('post',[
    //     'title' => 'Single Post',
    //     'post' => Post::find($slug)
    // ]);
);

Route::get('categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' =>Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});