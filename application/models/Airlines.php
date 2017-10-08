<?php

class Airlines extends CI_Model
{
	var $data;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		$jsonAirlines = file_get_contents('http://wacky.jlparry.com/info/airlines');	
		$this->data = json_decode($jsonAirlines, true);

		foreach ($this->data as $key => $record)
		{
			$record['key'] = $key;
			$this->data[$key] = $record;
		}

		$this->data['airlines'] = json_decode($jsonAirlines, true);
	}

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->data[$which]) ? null : $this->data[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data['airlines'];
	}

}
