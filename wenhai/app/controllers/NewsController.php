<?php

class NewsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$news = News::all();
		return View::make('newslist')->with('news',$news);
	}

	public function manage()
	{
		$news = News::all();
		return View::make('admin.news.list')->with('news',$news);
	}

	public function save()
	{
		$news = News::all();
		return View::make('admin.news.list')->with('news',$news);
	}
}
