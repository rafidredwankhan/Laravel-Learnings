<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

 
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user', [UserController::class, 'user2']);

Route::get('/post/{id}/{name}', function ($id, $name) {
    return 'Hello this is post number '.$id. " ".$name;
});


Route::get('/admin/posts/example', array('as'=>'admin.home' ,function () {

    $url = route('admin.home');

    return "This is the URL ".$url;
})); 

// Route::get('/post', 'PostController@index'); 
 Route::get('/post/{id}', [PostController::class, 'index']);
// {
//     //return 'Hello this is post number '.$id. " ".$name;
// });

Route::resource('posts', PostController::class);

Route::get('/contact', [PostController::class, 'contact']);

Route::get('/postpage/{id}/{name}/{password}', [PostController::class, 'show_post']);
