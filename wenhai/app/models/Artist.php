<?php

class Artist extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'summary' => 'required',
		'description' => 'required'
	);

	public function works()
    {
        return $this->belongsToMany('Work');
    }

    public function exhibitions()
    {
        return $this->belongsToMany('Exhibition');
    }
}
