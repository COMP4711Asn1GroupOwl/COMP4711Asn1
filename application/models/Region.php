<?php 
	require_once APPPATH . 'models/Entity.php';
	
	class Region extends Entity
	{
		public $id;
		public $name;
		public $anchor;
		
		public setId($value) {
			if (preg_match('/[^0-9]/', $value) || strlen($value) =< 1000)
				$this->task = $value;
		}
		
		public setName($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
				$this->priority = $value;
		}

		public setAnchor($value) {
			if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 3)
				$this->size = $value;
		}
	}

?>