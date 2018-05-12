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

Auth::routes();

// Route::get('/profile', 'PostController@index');
// Route::get('/kevin1', 'CommentController@test');


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
});




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/
Route::get('api/kota/all', 'KotaController@getAllKota')->name('api.kota');
Route::get('api/wisata/{id}', 'TempatWisataController@getWisata')->name('api.wisata');