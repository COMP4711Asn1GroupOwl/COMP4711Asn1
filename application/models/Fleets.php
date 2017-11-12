<?php

class Fleets extends CI_Model
{
	var $data;
	var $airplanes;
	var $airports;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		//assign models to each variable
		$airports = new Airports();
		$airplanes = new Airplanes();
		$this->airportlist =  json_decode(json_encode($airports->all()), True);
		$this->airplanelist = json_decode(json_encode($airplanes->all()), True);
		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data['airports'] = $this->airportlist;
		$this->data['airplanes'] = $this->airplanelist;		
	}

	public function getAirplane($which) {
		return !isset($this->data['airplanes'][$which]) ? null : $this->data['airplanes'][$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
