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
		$airplanes = new Airplanes();
		$airports = new Airports();
		$this->airportList = $airports->all();
		$this->airplaneList = $airplanes->all();
		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data["airports"] = $this->airports;
		$this->data["airplanes"] = $this->airplanes;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}

?>