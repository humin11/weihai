<?php

class Fair extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'content' => 'required',
		'type' => 'required'
	);
}
