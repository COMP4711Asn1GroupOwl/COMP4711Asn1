<?php 

class FleetController extends Application {	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Fleet');
                $this->data = $this->Fleet->all();
		$this->data['pagebody'] = 'airplaneDetail';
		$this->data['pagetitle'] = 'Fleet';
		$this->render();
	}
}
?>