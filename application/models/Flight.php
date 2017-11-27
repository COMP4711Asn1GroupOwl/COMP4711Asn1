<?php 
	require_once APPPATH . 'models/Entity.php';

	class Flight extends Entity
	{
		public $id;
		public $airline;
		public $to;
		public $timeToBoard;
		public $terminal;
		public $community;
		public $timeToArrive;

		public function setId($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) <= 100)
				$this->id = $value;
		}
		
		public function setAirline($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 100)
				$this->airline = $value;
		}

		public function setTo($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 100)
				$this->to = $value;
		}

		public function setTimeToBoard($value) {
			// if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 4)
				$this->timeToBoard = $value;
		}

		public function setTerminal($value) {
			if (preg_match('/[^0-9]/', $value) || strlen($value) < 1)
				$this->terminal = $value;
		}

		public function setCommunity($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 100)
				$this->community = $value;
		}

		public function setTimeToArrive($value) {
			//if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 100)
				$this->timeToArrive = $value;
		}

	}
?>