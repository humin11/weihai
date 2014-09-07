<?php

class About extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'content' => 'required'
	);
}
