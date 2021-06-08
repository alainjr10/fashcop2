<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function () {
    return view('welcome');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index2')->name('dashboard');
});

// for farmers
Route::group(['middleware' => ['auth', 'role:farmer']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

// for investors
Route::group(['middleware' => ['auth', 'role:investor']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Route::get('/p/create', 'App\Http\Controllers\PostsController@create');

Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/p/{post}', 'App\Http\Controllers\PostsController@showapi');

Route::get('students', 'App\Http\Controllers\ProfilesController@getAllUsers');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update')->name('profile.update');





Route::get('/users', function () {
    return User::all();
});
Route::post('register', 'App\Http\Controllers\Auth\RegisteredUserController@register');

Route::get('posts', 'App\Http\Controllers\Api\PostsController@getAllPosts');
Route::get('posts/{id}', 'App\Http\Controllers\Api\PostsController@getPost');
//Route::post('posts-upload', 'App\Http\Controllers\Api\PostsController@store');
Route::post('/posts', 'App\Http\Controllers\Api\PostsController@createPost');
Route::put('posts/{id}', 'App\Http\Controllers\Api\PostsController@updatePost');
//Route::delete('books/{id}','Api\PostsController@deleteBook');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
