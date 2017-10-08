<?php
class Flights extends CI_Model
{
	var $data = array();
	var $regions;
	var $airports;

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

	public function showRegion($key)
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'regionDetail';

		// build the list of authors, to pass on to our view
		$this->load->model('regions');
		$source = $this->regions->get($key);
		var_dump($source);
		// pass on the data to present, adding the author record's fields
		$this->data = array_merge($this->data, (array) $source);

		$this->render();
	}
}
