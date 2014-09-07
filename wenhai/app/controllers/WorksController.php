<?php

class WorksController extends BaseController {

	/**
	 * Work Repository
	 *
	 * @var Work
	 */
	protected $work;

	public function __construct(Work $work)
	{
		$this->work = $work;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$works = $this->work->all();

		return View::make('works.index', compact('works'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$artists = Artist::all();
		$artarray = array();
		$artist_id = Input::get("artist_id");
		foreach ($artists as $art) {
			# code...
			$artarray[$art->id] = $art->name;
		}
		return View::make('works.create', compact('artarray', 'artist_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input = array_except($input, 'artist_id');
		$input = array_except($input, 'image');
		$input = array_except($input, 'files');

		$file = Input::file("image");
		
        if (Input::hasFile('image')) {

            // If validation pass, get filename and extension
            // Generate random (12 characters) string
            // And specify a folder name of uploaded image
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension();
            $folderName      = str_random(12);
            $destinationPath = 'uploads/works/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(200, 200)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["image"] = $destinationPath. '/' . $fileName;
        }
		$validation = Validator::make($input, Work::$rules);

		if ($validation->passes())
		{
			$this->work->create($input);
			if(Input::has("artist_id")){
				$work -> artists() -> attach(Input::input("artist_id"));
			}
			return Redirect::route('works.index');
		}

		return Redirect::route('works.create')
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
		$work = $this->work->findOrFail($id);

		return View::make('works.show', compact('work'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$work = $this->work->find($id);
		$artists = Artist::all();
		$artarray = array();
		$artist = null;
		foreach ($artists as $art) {
			# code...
			$artarray[$art->id] = $art->name;
		}

		foreach ($work -> artists as $arts) {
			$artist = $arts -> id;
		}

		if (is_null($work))
		{
			return Redirect::route('works.index');
		}

		return View::make('works.edit', compact('work','artist','artarray'));
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
		$input = array_except($input, 'artist_id');
		$input = array_except($input, 'image');
		$input = array_except($input, 'files');

		$file = Input::file("image");
		
        if (Input::hasFile('image')) {

            // If validation pass, get filename and extension
            // Generate random (12 characters) string
            // And specify a folder name of uploaded image
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension();
            $folderName      = str_random(12);
            $destinationPath = 'uploads/works/' . $folderName;

            // Move file to generated folder
            $file->move(public_path()."/".$destinationPath, $fileName);

            // Crop image (possible by Intervention Image Class)
            // And save as miniature
            Image::make(public_path()."/".$destinationPath . '/' . $fileName)->resize(200, 200)->save(public_path()."/".$destinationPath . '/min_' . $fileName);

            // Insert image information to database
            $input["image"] = $destinationPath. '/' . $fileName;
        }
		$validation = Validator::make($input, Work::$rules);

		if ($validation->passes())
		{
			$work = $this->work->find($id);
			$work->update($input);
			if(Input::has("artist_id")){
				if($work->artists->count()>0){
					foreach ($work -> artists as $art) {
						# code...
						if ($art->id != Input::input("artist_id")  && ! is_null($art->id)) {
							# code...
							$work -> artists() -> detach($art->id);
							$work -> artists() -> attach(Input::input("artist_id"));
						}
					}
				} else {
					$work -> artists() -> attach(Input::input("artist_id"));
				}
				
			}
			return Redirect::route('works.show', $id);
		}

		return Redirect::route('works.edit', $id)
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
		$this->work->find($id)->delete();

		return Redirect::route('works.index');
	}

}
