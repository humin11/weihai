<?php

class ExhibitionsController extends BaseController {

	/**
	 * Exhibition Repository
	 *
	 * @var Exhibition
	 */
	protected $exhibition;

	public function __construct(Exhibition $exhibition)
	{
		$this->exhibition = $exhibition;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exhibitions = $this->exhibition->all();

		return View::make('exhibitions.index', compact('exhibitions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('exhibitions.create');
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
            $destinationPath = 'uploads/exhibition/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;
        }

		$validation = Validator::make($input, Exhibition::$rules);

		if ($validation->passes())
		{
			$this->exhibition->create($input);

			return Redirect::route('exhibitions.index');
		}

		return Redirect::route('exhibitions.create')
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
		$exhibition = $this->exhibition->findOrFail($id);

		return View::make('exhibitions.show', compact('exhibition'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exhibition = $this->exhibition->find($id);

		if (is_null($exhibition))
		{
			return Redirect::route('exhibitions.index');
		}

		return View::make('exhibitions.edit', compact('exhibition'));
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
            $destinationPath = 'uploads/exhibition/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;
        }

		$validation = Validator::make($input, Exhibition::$rules);

		if ($validation->passes())
		{
			$exhibition = $this->exhibition->find($id);
			$exhibition->update($input);

			return Redirect::route('exhibitions.show', $id);
		}

		return Redirect::route('exhibitions.edit', $id)
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
		$this->exhibition->find($id)->delete();

		return Redirect::route('exhibitions.index');
	}

}
