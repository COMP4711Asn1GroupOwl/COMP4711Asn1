<?php 
	require_once APPPATH . 'models/Entity.php';
	class Airport extends Entity
	{

		public $id;
		public $community;
		public $airport;
		public $region;
		public $coordinates;
		public $runway;
		public $airline;

		public setId($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 3)
				$this->task = $value;
		}
		
		public setCommunity($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
				$this->priority = $value;
		}

		public setAirport($value) {
			if (preg_match('/[^a-zA-Z()]/', $value) || strlen($value) =< 100)
				$this->size = $value;
		}

		public setRegion($value) {
			if (preg_match('/[^0-9]/', $value) || strlen($value) < 10)
				$this->group = $value;
		}

		public setCoordinates($value) {
			if (preg_match('/a-zA-Z0-9°\'"', $value) || strlen($value) < 10)
				$this->group = $value;
		}

		public setRunway($value) {
			if (preg_match('/[^0-9]/', $value) || strlen($value) < 4)
				$this->group = $value;
		}

		public setAirline($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
				$this->group = $value;
		}
		
		// var $data;

		// // Constructor
		// public function __construct()
		// {
		// 	parent::__construct();

		// 	$jsonAirports = file_get_contents('http://wacky.jlparry.com/info/airports');	
		// 	$this->data = json_decode($jsonAirports, true);
		// 	foreach ($this->data as $key => $record)
		// 	{
		// 		$record['key'] = $key;
		// 		$this->data[$key] = $record;
		// 	}
		// }

		// // retrieve a single quote, null if not found
		// public function get($which)
		// {
		// 	return !isset($this->data[$which]) ? null : $this->data[$which];
		// }

		// // retrieve all of the quotes
		// public function all()
		// {
		// 	return $this->data;
		// }



	}
?>