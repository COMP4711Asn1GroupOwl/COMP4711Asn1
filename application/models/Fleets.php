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
		$this->load->model("Airports");
		$this->load->model("Airplanes");
		$this->airports = $this->Airports->all();
		$this->airplanes = $this->Airplanes->all();
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
