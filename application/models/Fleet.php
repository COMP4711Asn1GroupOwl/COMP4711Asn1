<?php

class Fleet extends CI_Model
{
	var $data;
	var $airplanes;
	var $airlines;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		//assign models to each variable
		$this->load->model("Airlines");
		$this->load->model("Planes");
		$this->airlines = $this->Airlines->all();
		$this->airplanes = $this->Planes->all();
		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data["airplanes"] = $this->airplanes;
		$this->data["airlines"] = $this->airlines;	
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
