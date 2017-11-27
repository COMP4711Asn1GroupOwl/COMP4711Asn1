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
            $this->data['airlines'] = $this->Airlines->all();
            
            // find the data in the array that has id of owl
            foreach ($this->data['airlines'] as $key => $record) {
                if ($record->id == 'owl') {
                    $owl = $record;
                }
            }
            
            $this->data['pagebody'] = 'homepage';
            $this->data['baseAirport'] = $owl->base;
            $this->data['dest1Airport'] = $owl->dest1;
            $this->data['dest2Airport'] = $owl->dest2;
            $this->data['dest3Airport'] = $owl->dest3;
            $this->data['airplaneCount'] = count($this->Airplanes->all());
            $this->data['airlineCount'] = count($this->Airlines->all());
            $this->data['pagetitle'] = 'Owl Airline';
            $this->render();
                
	}



}
