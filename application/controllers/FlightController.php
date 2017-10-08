
<?php 
class FlightController extends Application {	
	var $owl;
	var $dests;
	var $planes;
	var $airport;

	function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->model('Flights');
		$this->data = $this->Flights->all();

		// Find Owl Airline
		foreach ($this->data['airlines'] as $key => $record)
			if ($record['id'] == 'owl')
				$owl = $record;

		// Find correct Airport
		foreach ($this->data['airports'] as $key => $record)
			if ($record['id'] == $owl['base'])
				$airport = $record;

		// Collect destination
		$dests = array('1' => array('dest' => $owl['dest1']), '2' => array('dest' => $owl['dest2']), '3' => array('dest' => $owl['dest3']));

		$this->data['dests'] = $dests;

		// Populate planes
		for ($i = 1; $i <= 3; $i++)
			$planes[$i] = array('planeCode' => $this->data['airlines'][$i]['id']);

		// Formate schedules
		$this->data['schedules'] = array('1' => array('dest' => $owl['dest1'], 'planeCode' => $planes['1']['planeCode'], 'community' => $airport['community']), '2' => array('dest' => $owl['dest2'], 'planeCode' => $planes['2']['planeCode'], 'community' => $airport['community']), '3' => array('dest' => $owl['dest3'], 'planeCode' => $planes['3']['planeCode'], 'community' => $airport['community']));

		$this->data['pagebody'] = 'FlightView';
		$this->data['pagetitle'] = 'Flights';
		$this->render();
		// $this->load->view('FlightView', $data);
	}
}
?>	