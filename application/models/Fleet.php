<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Fleet extends CI_Model
{

	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x
	$json = file_get_contents('http://wacky.jlparry.com/info/airplanes');
	$data = json_decode($json);
	var $airplanes = $data;

	// Constructor
	public function __construct()
	{
		parent::__construct();

		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->airplanes as $key => $record)
		{
			$record['key'] = $key;
			$this->airplanes[$key] = $record;
		}
	}

	// retrieve a single quote, null if not found
	public function get($which)
	{
		return !isset($this->airplanes[$which]) ? null : $this->airplanes[$which];
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->airplanes;
	}

}
