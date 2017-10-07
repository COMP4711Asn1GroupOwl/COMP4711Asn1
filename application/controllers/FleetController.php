
<?php 

class FleetController extends Application {	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Fleet');
		$data['data'] = $this->Fleet->all();
		$this->load->view('FleetView', $data);
	}
}
?>