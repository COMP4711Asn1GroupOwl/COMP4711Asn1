<?php

class Regions extends CI_Model
{
	var $data;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		$jsonAirplanes = file_get_contents('http://wacky.jlparry.com/info/regions');	
		$this->data['regions'] = json_decode($jsonAirplanes, true);

	}

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data['regions'];
	}

}
