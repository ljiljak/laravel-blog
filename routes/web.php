<?php

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

use \App\Http\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostsController@index')->name('all-posts');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{id}', ['as' => 'single-post', 'uses' => 'PostsController@show']);

Route::post('/posts', 'PostsController@store');

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');
    
Route::get('/logout', 'LoginController@logout');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/users/{id}', 'UserController@show')->name('users');

Route::post('/posts/{post_id}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);