
<?php 
	
class Fleet extends Application {
	function __construct() {
		parent::__construct();
	}

	public function brown() {
		$this->load->model('Fleet');
		$this->load->view('Fleet');
	}
}
?>