<?php

class Work extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'summary' => 'required'
	);

	public function artists()
    {
        return $this->belongsToMany('Artist','artist_work');
    }

    public function exhibitions()
    {
        return $this->belongsToMany('Exhibition','exhibition_work');
    }

}
