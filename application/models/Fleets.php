<?php

class Fleets extends CSV_Model
{
	var $data;
	var $airports;

	// Constructor
	public function __construct()
	{
		parent::__construct(APPPATH . '../data/Airplanes.csv', 'id');

		//$airports = new Airports();
		//$this->data['airports'] = json_decode(json_encode($airports->all()), True);
	}

	public function rules()
	{
	    $config = array(
	        ['field' => 'seats', 'label' => 'Seats', 'rules' => 'integer|less_than[10]'],
	        ['field' => 'reach', 'label' => 'Reach', 'rules' => 'integer|max_length[4]'],
	        ['field' => 'cruise', 'label' => 'Cruise', 'rules' => 'integer|less_than[999]'],
	        ['field' => 'takeoff', 'label' => 'Take off', 'rules' => 'integer'],
	        ['field' => 'hourly', 'label' => 'Hourly', 'rules' => 'integer'],
	    );
	    return $config;
	}

}
