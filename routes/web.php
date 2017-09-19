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

Route::group(['prefix' => 'admin', 'middleware' => ['permission:write-article']], function() {

    Route::get('/', 'SettingsController@home');
    Route::resource('/article', 'ArticleController', ['except' => ['show']]);

});

Route::group(['prefix' => 'admin', 'middleware' => ['permission:edit-site']], function() {

    Route::resource('/music', 'MusicController', ['except' => ['show']]);
    Route::post('/article/{id}/delete', 'ArticleController@destroy');
    Route::post('/article/{id}/update', 'ArticleController@update');
    Route::post('/music/{id}/delete', 'MusicController@destroy');
    Route::post('/music/{id}/update', 'MusicController@update');
    Route::resource('/event', 'EventController', ['except' => ['show']]);
    Route::post('/event/{id}/delete', 'EventController@destroy');
    Route::post('/event/{id}/update', 'EventController@update');
    Route::get('/featured/edit', 'SettingsController@editFeatured');
    Route::post('/featured/update', 'SettingsController@updateFeatured');
    Route::get('/users', 'SettingsController@users');
    Route::get('/users/{user}', 'SettingsController@changePermissionView');
    Route::post('/users/{user}/update', 'SettingsController@changePermission');

});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/settings', 'SettingsController@userSettings');
    Route::post('/settings', 'SettingsController@userSettingsPost');

});

Route::get('/', 'GeneralController@homePage');
Route::get('/home', 'HomeController@index');

Route::get('/article/{slug}', 'GeneralController@showArticle');
Route::get('/articles', 'GeneralController@listArticles');
Route::get('/articles/by/{id}', 'GeneralController@showWritersArticles');

Route::get('/music/{slug}', 'GeneralController@showMusic');
Route::get('/music', 'GeneralController@music');

Route::get('/events/{slug}', 'GeneralController@showEvent');
Route::get('/events', 'GeneralController@listEvents');

Route::get('/about', 'GeneralController@about');
Route::get('/contact', 'GeneralController@contact');
Route::post('/contact/submit', 'GeneralController@contactPost');

Auth::routes();