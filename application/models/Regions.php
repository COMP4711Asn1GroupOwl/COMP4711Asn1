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

	class Regions extends CSV_Model {

	    public function __construct()
	    {
	            parent::__construct(APPPATH . '../data/Regions.csv', 'id');
	    }


	    function getCategorizedTasks()
		{
		    // extract the undone tasks
		    foreach ($this->all() as $region)
		    {
		        if ($region->status != 2)
		            $undone[] = $task;
		    }

		    // substitute the category name, for sorting
		    foreach ($undone as $region)
		        $region->group = $this->app->group($region->group);

		    // order them by category
		    usort($undone, 'orderByCategory');

		    // convert the array of region objects into an array of associative objects       
		    foreach ($undone as $region)
		        $converted[] = (array) $region;

			return $converted;
		}
	  
	}

?>