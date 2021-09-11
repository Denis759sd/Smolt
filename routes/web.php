<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');

Route::get('/genre', 'App\Http\Controllers\GenreController@index')->name('genre');

Route::get('/film/{id}', 'App\Http\Controllers\FilmController@show')->name('showFilm');

Auth::routes();

Route::middleware(['role:admin', 'auth'])->prefix('admin_panel')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('film', \App\Http\Controllers\Admin\FilmController::class);
});
