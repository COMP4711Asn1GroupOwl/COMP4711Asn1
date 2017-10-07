
<?php 

class FlightController extends Application {	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Flights');
		$data['data'] = $this->Flights->all();
		$this->load->view('FlightView', $data);
	}
}
?>