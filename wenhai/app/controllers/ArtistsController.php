<?php

class ArtistsController extends BaseController {

	/**
	 * Artist Repository
	 *
	 * @var Artist
	 */
	protected $artist;

	public function __construct(Artist $artist)
	{
		$this->artist = $artist;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artists = $this->artist->all();

		return View::make('artists.index', compact('artists'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('artists.create');
	}


	public function getAllArtist(){
		$artists = $this->artist->all();
		return Response::json($artists);
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
            $destinationPath = 'uploads/artist/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;
        }


		$validation = Validator::make($input, Artist::$rules);

		if ($validation->passes())
		{
			$this->artist->create($input);

			return Redirect::route('artists.index');
		}

		return Redirect::route('artists.create')
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
		$artist = $this->artist->findOrFail($id);

		return View::make('artists.show', compact('artist'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artist = $this->artist->find($id);

		if (is_null($artist))
		{
			return Redirect::route('artists.index');
		}

		return View::make('artists.edit', compact('artist'));
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
		$input = array_except($input, 'cover');
		$file = Input::file("cover");
		
        if (Input::hasFile('cover')) {

            // If validation pass, get filename and extension
            // Generate random (12 characters) string
            // And specify a folder name of uploaded image
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension();
            $folderName      = str_random(12);
            $destinationPath = 'uploads/artist/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(160, 160)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["cover"] = $destinationPath. '/' . $fileName;
            $input["cover_min"] = $destinationPath. '/min_' . $fileName;

            File::delete(public_path()."/".$this->artist->find($id)->cover);
			File::delete(public_path()."/".$this->artist->find($id)->cover_min);
        }
		$validation = Validator::make($input, Artist::$rules);

		if ($validation->passes())
		{
			$artist = $this->artist->find($id);
			$artist->update($input);

			return Redirect::route('artists.show', $id);
		}

		return Redirect::route('artists.edit', $id)
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
		File::delete(public_path()."/".$this->artist->find($id)->cover);
		File::delete(public_path()."/".$this->artist->find($id)->cover_min);
		$this->artist->find($id)->delete();

		return Redirect::route('artists.index');
	}

}
