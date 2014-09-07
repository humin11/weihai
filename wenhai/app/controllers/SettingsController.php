<?php

class SettingsController extends BaseController {

	/**
	 * Setting Repository
	 *
	 * @var Setting
	 */
	protected $setting;

	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$setting = $this->setting->first();

		if(is_null($setting)){
			return View::make('settings.create');
		} else {
			return View::make('settings.edit', compact('setting'));
		}

		return View::make('settings.create');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input = array_except($input, 'files');
		$validation = Validator::make($input, Setting::$rules);

		if ($validation->passes())
		{
			$this->setting->create($input);

			return Redirect::route('settings.index');
		}

		return Redirect::route('settings.create')
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
		$setting = $this->setting->findOrFail($id);

		return View::make('settings.show', compact('setting'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$setting = $this->setting->find($id);

		if (is_null($setting))
		{
			return Redirect::route('settings.index');
		}

		return View::make('settings.edit', compact('setting'));
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
		$input = array_except($input, 'files');
		$validation = Validator::make($input, Setting::$rules);

		if ($validation->passes())
		{
			$setting = $this->setting->find($id);
			$setting->update($input);

			return Redirect::route('settings.edit', $id);
		}

		return Redirect::route('settings.edit', $id)
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
		$this->setting->find($id)->delete();

		return Redirect::route('settings.index');
	}

}
