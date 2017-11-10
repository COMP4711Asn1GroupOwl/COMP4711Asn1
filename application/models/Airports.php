<?php

 // return -1, 0, or 1 of $a's category name is earlier, equal to, or later than $b's
	function orderByCategory($a, $b)
	{
	    if ($a->group < $b->group)
	        return -1;
	    elseif ($a->group > $b->group)
	        return 1;
	    else
	        return 0;
	}
	class Airports extends CSV_Model
	{

		 public function __construct()
	    {
	            parent::__construct(APPPATH . '../data/Airports.csv', 'id');
	    }

	    function getCategorizedTasks()
		{
		    // extract the undone tasks
		    foreach ($this->all() as $airport)
		    {
		        if ($airport->status != 2)
		            $undone[] = $airport;
		    }

		    // substitute the category name, for sorting
		    foreach ($undone as $airport)
		        $airport->group = $this->app->group($airport->group);

		    // order them by category
		    usort($undone, 'orderByCategory');

		    // convert the array of airport objects into an array of associative objects       
		    foreach ($undone as $airport)
		        $converted[] = (array) $airport;

			return $converted;
		}
	    


	}

?>