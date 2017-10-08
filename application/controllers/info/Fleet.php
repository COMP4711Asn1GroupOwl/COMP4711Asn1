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
}
?>