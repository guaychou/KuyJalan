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


Route::get('/', function () {
    return view('getstarted');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'PostController@index');
Route::get('/comment', 'CommentController@index');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
|
*/
Route::name('post.')->group(function () {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/post/create', 'PostController@create')->name('create');
    Route::post('/post', 'PostController@store')->name('store');
    Route::get('/search', 'PostController@search')->name('search');

});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/
Route::get('api/kota/all', 'KotaController@getAllKota')->name('api.kota');
Route::get('api/wisata/{id}', 'TempatWisataController@getWisata')->name('api.wisata');

