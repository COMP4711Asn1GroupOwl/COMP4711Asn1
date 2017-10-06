<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends Application
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Flight for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'flight';

		// build the list of regions and airlines, to pass on to our view
		$regions = $this->flights->all('regions');
		$airlines = $this->flights->all('airlines');

		// pass on the data to present, as the "authors" view parameter
		$this->data['regions'] = $regions;
		$this->data['airlines'] = $airlines;

		$this->render();
		
	}
}
