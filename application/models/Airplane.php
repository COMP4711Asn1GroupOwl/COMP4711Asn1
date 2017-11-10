<?php 
require_once APPPATH . 'models/Entity.php';
class Airplane extends Entity
{
	public $id;
	public $manufacturer;
	public $model;
	public $price;
	public $seats;
	public $reach;
	public $cruise;
	public $takeoff;
	public $hourly;

	public setId($value) {
		if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
			$this->task = $value;
	}
	
	public setManufacturer($value) {
		if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
			$this->priority = $value;
	}

	public setModel($value) {
		if (preg_match('/[^a-zA-Z]/', $value) || strlen($value) =< 100)
			$this->size = $value;
	}

	public setPrice($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}

	public setSeats($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}

	public setReach($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}

	public setTakeoff($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}

	public setTakeoff($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}

	public setHourly($value) {
		if (preg_match('/[^0-9]/', $value) || strlen($value) < 5)
			$this->group = $value;
	}
}


?>