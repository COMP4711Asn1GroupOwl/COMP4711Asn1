<?php

class Airplanes extends CI_Model
{
	var $data;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		$jsonAirplanes = file_get_contents('http://wacky.jlparry.com/info/airplanes');	
		$this->data = json_decode($jsonAirplanes, true);
                
		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->data as $key => $record)
		{
			$record['key'] = $key;
			$this->data[$key] = $record;
		}
	}

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
