<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');

Route::get('/artist', 'HomeController@artist');

Route::get('/ex/{type}', 'HomeController@exhibition');

Route::get('/pd/{status}', 'HomeController@works');

Route::get('/fair/{type}', 'HomeController@fairs');

Route::get('/medium/{type}', 'HomeController@medium');

Route::get('/about/{type}', 'HomeController@about');

Route::get('/list', function()
{
	return View::make('list');
});


Route::get('/news/{id}', function($id)
{
	return View::make('news');
});

Route::get('/service', function()
{
	return View::make('service');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/cms', function()
{
	return View::make('admin.index');
});

Route::get('/cms/news','NewsController@manage');
Route::get('/cms/news/blank', function()
{
	return View::make('admin.news.blank');
});

Route::post('/cms/news/save','NewsController@save');


Route::resource('settings', 'SettingsController');

Route::resource('exhibitions', 'ExhibitionsController');

Route::resource('works', 'WorksController');

Route::resource('artists', 'ArtistsController');

Route::resource('getAllArtist', 'ArtistsController@getAllArtist');

Route::get('artists/{id}/cover', function($id)
{
    $art = Artist::find($id);
    $response = Response::make($art->cover, 200);
    $response->header('Content-Type', 'image/jpg');
    return $response;
});

Route::resource('media', 'MediaController');

Route::get('/abouts/m/{type}', 'AboutsController@view');

Route::resource('abouts', 'AboutsController');

Route::resource('fairs', 'FairsController');