<?php 

class Fleet extends Application {	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Fleets');
        $this->data = $this->Fleets->all();
		$this->data['pagebody'] = 'airplane';
		$this->data['pagetitle'] = 'Fleet';
		$this->render();
                
	}

	public function show($key)
	{
		$role = $this->session->userdata('userrole');
		// this is the view we want shown
		if ($role == ROLE_OWNER)
			$this->data['pagebody'] = 'fleetAdmin';
		else 
			$this->data['pagebody'] = 'fleet';
	    
		$this->data['pagetitle'] = 'Airplane';
		
		// build the list of authors, to pass on to our view
		$source = $this->fleets->data['airplanes'][$key];
		// pass on the data to present, adding the author record's fields
		$this->data = array_merge($this->data, (array) $source);

		$this->render();
	}

	// Build a suitable error mesage
	private function alert($message) {
	    $this->load->helper('html');        
	    $this->data['error'] = heading($message,3);
	}

	// Forget about this edit
	function cancel() {
	    $this->session->unset_userdata('fleet');
	    redirect('/info/fleet');
	}
}
?>