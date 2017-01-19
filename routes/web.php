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

Route::group(['prefix' => 'admin', 'middleware' => ['permission:edit-site']], function() {
    Route::resource('/article', 'ArticleController', ['except' => ['show']]);
    Route::post('/article/{id}/delete', 'ArticleController@destroy');
    Route::post('/article/{id}/update', 'ArticleController@update');
    Route::get('/', 'SettingsController@home');
});

Route::get('/articles/{slug}', 'GeneralController@showArticle');
Route::get('/articles', 'GeneralController@listArticles');
Route::get('/', 'GeneralController@homePage');
Route::get('/home', 'HomeController@index');

Route::get('/music', function () {
    return view('music');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

