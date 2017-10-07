<?php

class Planes extends CI_Model
{
	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, 'http://wacky.jlparry.com/info/airplanes');
		$result = curl_exec($ch);
		return $result;
	}
	
}
