<?php
class Flights extends CI_Model
{
	var $data;
	var $regions;
	var $airports;

	// Constructor
	public function __construct()
	{
		parent::__construct();
		
		//assign models to each variable
		$this->load->model('Regions');
		$this->load->model('Airports');
		$this->regions = $this->Regions->all();
		$this->airports = $this->Airports->all();

		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data['regions'] = $this->regions;
		$this->data['airports'] = $this->airports;
	}
	
	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}
