<?php

class HomeController extends BaseController {

	protected $artist;

	public function __construct(Artist $artist)
	{
		$this->artist = $artist;
	}

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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index(){
		$setting = Setting::first();

		return View::make('index', compact('setting'));
	}

	/** Display all artists
	*/
	public function artist()
	{
		$artists = $this->artist->paginate(12);

		$setting = Setting::first();

		return View::make('artist', compact('artists','setting'));
	}

	/** 
	* Display all exhibition
	*/
	public function exhibition($type)
	{
		$exhibitions = Exhibition::where('type','=',$type)->paginate(10);
		$setting = Setting::first();

		return View::make('exhibition', compact('exhibitions','type','setting'));
	}

	/** 
	* Display all works
	*/
	public function works($status)
	{
		$works = Work::where('status','=',$status)->paginate(10);
		$setting = Setting::first();

		return View::make('works', compact('works','status','setting'));
	}

	/** 
	* Display all fairs
	*/
	public function fairs($type)
	{
		$fairs = Fair::where('type','=',$type)->paginate(10);
		$setting = Setting::first();

		return View::make('fair', compact('fairs','type','setting'));
	}

	public function medium($type)
	{
		$medium = Medium::where('type','=', $type) -> paginate(15);
		$setting = Setting::first();
		return View::make('medium', compact('medium','type','setting'));
	}

	public function about($type){
		$about = About::where('type','=', $type) -> first();
		$setting = Setting::first();
		return View::make('about', compact('about','type','setting'));
	}

}
