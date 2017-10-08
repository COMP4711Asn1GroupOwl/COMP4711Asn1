<?php
class Flights extends CI_Model
{
	var $data = array();
	var $regions;
	var $airlines;

	// Constructor
	public function __construct()
	{
		parent::__construct();
		
		//assign models to each variable
		$this->load->model('Regions');
		$this->load->model('Airlines');
		$this->regions = $this->Regions->all();
		$this->airlines = $this->Airlines->all();

		//data is array of models has planes and airlines which are an array of stdObjects 
		$this->data['regions'] = $this->regions;
		$this->data['airlines'] = $this->airlines;
	}
	
	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}
}
