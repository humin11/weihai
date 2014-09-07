<?php

class MediaController extends BaseController {

	/**
	 * Medium Repository
	 *
	 * @var Medium
	 */
	protected $medium;

	public function __construct(Medium $medium)
	{
		$this->medium = $medium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$media = $this->medium->all();

		return View::make('media.index', compact('media'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('media.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Medium::$rules);

		if ($validation->passes())
		{
			$this->medium->create($input);

			return Redirect::route('media.index');
		}

		return Redirect::route('media.create')
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
		$medium = $this->medium->findOrFail($id);

		return View::make('media.show', compact('medium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$medium = $this->medium->find($id);

		if (is_null($medium))
		{
			return Redirect::route('media.index');
		}

		return View::make('media.edit', compact('medium'));
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
		$validation = Validator::make($input, Medium::$rules);

		if ($validation->passes())
		{
			$medium = $this->medium->find($id);
			$medium->update($input);

			return Redirect::route('media.show', $id);
		}

		return Redirect::route('media.edit', $id)
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
		$this->medium->find($id)->delete();

		return Redirect::route('media.index');
	}

}
