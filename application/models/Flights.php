<?php
	require_once APPPATH . 'models/Airlines.php';
	class Flights extends CI_Model
	{
		var $data = array();
		//var $airlines;
		var $airports;
		var $airplanes;

		// Constructor
		public function __construct()
		{
			parent::__construct();
			
			//assign models to each variable
			//$this->load->model('Airlines');
			$airlines = new Airlines();
			$airports = new Airports();
			$airplanes = new Airplanes();

			$this->airlinelist = json_decode(json_encode($airlines->all()), True); 
			$this->airportlist = json_decode(json_encode($airports->all()), True); 
			$this->airplanelist = json_decode(json_encode($airplanes->all()), True); 
			
			//data is array of models has planes and airlines which are an array of stdObjects 
			$this->data['airlines'] = $this->airlinelist;
			$this->data['airports'] = $this->airportlist;
			$this->data['airplanes'] = $this->airplanelist;	
		}
		
		// retrieve all of the quotes
		public function all()
		{
			return $this->data;
		}
	}

?>