<?php

class AboutsController extends BaseController {

	/**
	 * About Repository
	 *
	 * @var About
	 */
	protected $about;

	public function __construct(About $about)
	{
		$this->about = $about;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$abouts = $this->about->all();

		return View::make('abouts.index', compact('abouts'));
	}

	public function view($type)
	{
		$about = About::where('type','=',$type)->first();

		if( is_null($about)){
			$about = new About;
			$about->name = Lang::get("about.type.".$type);
			$about->type = $type;
			$about->content="";
			$about->save();
		}

		return View::make('abouts.edit', compact('about'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('abouts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, About::$rules);

		if ($validation->passes())
		{
			$this->about->create($input);

			return Redirect::route('abouts.index');
		}

		return Redirect::route('abouts.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$about = $this->about->findOrFail($id);

		return View::make('abouts.show', compact('about'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$about = $this->about->find($id);

		if (is_null($about))
		{
			return Redirect::route('abouts.index');
		}

		return View::make('abouts.edit', compact('about'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$input = array_except($input,'files');
		$validation = Validator::make($input, About::$rules);

		if ($validation->passes())
		{
			$about = $this->about->find($id);
			$about->update($input);

			return Redirect::route('abouts.show', $id);
		}

		return Redirect::route('abouts.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->about->find($id)->delete();

		return Redirect::route('abouts.index');
	}

}
