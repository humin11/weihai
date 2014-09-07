<?php

class FairsController extends BaseController {

	/**
	 * Fair Repository
	 *
	 * @var Fair
	 */
	protected $fair;

	public function __construct(Fair $fair)
	{
		$this->fair = $fair;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fairs = $this->fair->all();

		return View::make('fairs.index', compact('fairs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('fairs.create');
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

		$file = Input::file("cover");
		
        if (Input::hasFile('cover')) {

            // If validation pass, get filename and extension
            // Generate random (12 characters) string
            // And specify a folder name of uploaded image
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension();
            $folderName      = str_random(12);
            $destinationPath = 'uploads/fairs/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;
        }

		$validation = Validator::make($input, Fair::$rules);

		if ($validation->passes())
		{
			$this->fair->create($input);

			return Redirect::route('fairs.index');
		}

		return Redirect::route('fairs.create')
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
		$fair = $this->fair->findOrFail($id);

		return View::make('fairs.show', compact('fair'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$fair = $this->fair->find($id);

		if (is_null($fair))
		{
			return Redirect::route('fairs.index');
		}

		return View::make('fairs.edit', compact('fair'));
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

		$file = Input::file("cover");
		
        if (Input::hasFile('cover')) {

            // If validation pass, get filename and extension
            // Generate random (12 characters) string
            // And specify a folder name of uploaded image
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension();
            $folderName      = str_random(12);
            $destinationPath = 'uploads/fairs/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;
        }

		$validation = Validator::make($input, Fair::$rules);

		if ($validation->passes())
		{
			$fair = $this->fair->find($id);
			$fair->update($input);

			return Redirect::route('fairs.show', $id);
		}

		return Redirect::route('fairs.edit', $id)
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
		$this->fair->find($id)->delete();

		return Redirect::route('fairs.index');
	}

}
