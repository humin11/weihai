<?php

class Exhibition extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'opentime' => 'required',
		'starttime' => 'required',
		'endtime' => 'required',
		'summary' => 'required',
		'description' => 'required'
	);

	public function artists()
    {
        return $this->belongsToMany('Artist','artist_exhibition');
    }
}
