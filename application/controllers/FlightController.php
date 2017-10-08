
<?php 

class FlightController extends Application {	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Flights');
		$this->data = $this->Flights->all();
		$this->data['pagebody'] = 'FlightView';
		$this->data['pagetitle'] = 'Flights';
		$this->render();
		// $this->load->view('FlightView', $data);
	}
}
?>	