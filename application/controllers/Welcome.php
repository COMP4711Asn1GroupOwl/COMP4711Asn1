<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{       
    var $owl;
    var $base;
    var $dest1;
    var $dest2;
    var $dest3;
    
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            // Get the count of airplanes and airlines
            $result = count($this->flights->airplanes);
            $result2 = count($this->flights->airlines);
            
            // this is the view we want shown
            $this->load->model('Flights');
            $this->data = $this->Flights->all();
            
            // find the data in the array that has id of owl
            foreach ($this->data['airlines'] as $key => $record) {
		if ($record['id'] == 'owl') {
                    $owl = $record;
                }
            }
            
            // find the data in the array that has id of YSN
            foreach($this->data['airports'] as $key => $value) {
                if ($value['id'] == $owl['base']) {
                    $base = $value;
                }
                
                if ($value['id'] == $owl['dest1']) {
                    $dest1 = $value;
                }
                
                if ($value['id'] == $owl['dest2']) {
                    $dest2 = $value;
                }
                
                if ($value['id'] == $owl['dest3']) {
                    $dest3 = $value;
                }
            }
            
            $this->data['pagebody'] = 'homepage';
            $this->data['baseAirport'] = $base['airport'];
            $this->data['dest1Airport'] = $dest1['airport'];
            $this->data['dest2Airport'] = $dest2['airport'];
            $this->data['dest3Airport'] = $dest3['airport'];
            $this->data['airplaneCount'] = $result;
            $this->data['airlineCount'] = $result2;
            $this->data['pagetitle'] = 'Owl Airline';
            $this->render();
                
	}



}
