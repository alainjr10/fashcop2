<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;

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

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
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

Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');

Route::put('/profile/{user}', 'App\Http\Controllers\ProfilesController@update')->name('profile.update');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
