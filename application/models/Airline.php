<?php 
	require_once APPPATH . 'models/Entity.php';
	class Airline extends Entity
	{
		public $id;
		public $base;
		public $dest1;
		public $dest2;
		public $dest3;
		
		public setId($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
				$this->task = $value;
		}
		
		public setBase($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 3)
				$this->priority = $value;
		}

		public setDest1($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 3)
				$this->size = $value;
		}

		public setDest2($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 3)
				$this->group = $value;
		}

		public setDest3($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) < 3)
				$this->group = $value;
		}

	}


?>