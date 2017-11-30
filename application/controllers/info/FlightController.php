
<?php
class FlightController extends Application {	

	function __construct() {
		parent::__construct();
	}

	public function index() {

        $this->data['flights'] = $this->Flights->all();

		$this->data['pagebody'] = 'flight';
		$this->data['pagetitle'] = 'Flights';

		$this->render();
	}

	public function show($key)
	{
		$this->load->helper('form');
		$role = $this->session->userdata('userrole');

		$this->session->set_userdata('flight', $this->Flights->get($key));
		
		$flight = $this->session->userdata('flight');

		// this is the view we want shown
		if ($role == ROLE_OWNER) {
			$this->data['pagebody'] = 'flightDetailAdmin';
			$fields = array(
				'fmodel'        => form_label($flight->id),
		        'fairline'      => form_label($flight->airline),
		        'fto'           => form_label('To') . form_input('to', $flight->to),
		        'ftimeToBoard'  => form_label('Time to Board') . form_input('timeToBoard', $flight->timeToBoard),
		        'fterminal'     => form_label('Terminal') . form_input('terminal', $flight->terminal),
		        'fcommunity'    => form_label('Community') . form_input('community', $flight->community),
		        'ftimeToArrive' => form_label('Time to Arrive') . form_input('timeToArrive', $flight->timeToArrive),
		        'zsubmit'       => form_submit(NULL, 'Update the Flight'),
		    );

		    $this->data = array_merge($this->data, $fields);

		} else {
			$this->data['pagebody'] = 'flightDetail';
			$this->data = array_merge($this->data, (array) $flight);
		}
	    
	    $this->data['key'] = $flight->id;
		$this->data['pagetitle'] = 'Flight';

		$this->render();
	}

	public function submit()
	{
	    // setup for validation
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules($this->Flights->rules());
	    $flight = (array) $this->session->userdata('flight');
	    $flight = array_merge($flight, $this->input->post());
	    $flight = (object) $flight;  // convert back to object
	    $this->session->set_userdata('flight', (object) $flight);

	    if ($this->form_validation->run())
	    {
	        $this->Flights->update($flight);

	        $this->alert('Fleet ' . $flight->id . ' updated', 'success');
	    } else
	    {
	        $this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
	    }

	    redirect('/info/FlightController');
	}
	
	// Build a suitable error mesage
	private function alert($message) {
	    $this->load->helper('html');        
	    $this->data['error'] = heading($message,3);
	}

	public function delete($key) {
		$this->Flights->delete($key);
		redirect('info/FlightController');
	}
}
?>	