<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 * @updated Ebon
 */
class Flights extends CI_Model
{

	// The data comes from http://www.imdb.com/title/tt0094012/
	// expressed using long-form array notaiton in case students use PHP 5.x

	var $regions = array(
        '1' => 	array('id' => '1',
        			 'name' => 'Vancouver Island',
        			 'anchor' => 'YCD'
    		    ),
        '2' =>  array('id' => '2',
        			  'name' => 'Lower Mainland',
        			  'anchor' => 'YDT'
    			),
        '3' = > array('id' => '3',
        			  'name' => 'Thompson-Nicola',
        			  'anchor' => 'YKA'
    			),
        '4' = > array('id' => '4',
        			  'name' => 'Kootenay',
        			  'anchor' => 'YXC'
    			),
        '5' => array('id' => '5',
        			 'name' => 'Cariboo',
        			 'anchor' => 'YWL'
    			),
        '6' => array('id' => '6',
        			 'name' => 'Skeena',
        			 'anchor' => 'YYD'
    			),
        '7' => array('id' => '7',
        			 'name' => 'Omineca',
        			 'anchor' => 'YXS'
    			),
        '8' => array('id' => '8',
        			 'name' => 'Okanagan',
        			 'anchor' => 'YYF'
    			),
        '9' => array('id' => '9',
        			 'name' => 'Peace',
        			 'anchor' => 'YXJ'
    			)
    	);

	var $airlines = array(
		'1' => array(
        	'id' => 'albatros',
        	'base' => 'YBL',
        	'dest1' => 'YAL',
        	'dest2' => 'YZT',
        	'dest3' => 'YMP'
    		),
        '2' => array(
	        'id' => 'bluebird',
	        'base' => 'YCD',
	        'dest1' => 'YQQ',
	        'dest2' => 'YAZ',
	        'dest3' => 'YPB'
    		),
        '3' => array(
	        'id' => 'cuckoo',
	        'base' => 'YCG',
	        'dest1' => 'ZGF',
	        'dest2' => 'YCW',
	        'dest3' => 'ZMH'
    		),
        '4' => array(
	        'id' => 'dove',
	        'base' => 'YCW',
	        'dest1' => 'YSE',
	        'dest2' => 'YPB',
	        'dest3' => 'YXT'
    		),
    	'5' => array(
	        'id' => 'eagle',
	        'base' => 'YDQ',
	        'dest1' => 'YXJ',
	        'dest2' => 'YNH',
	        'dest3' => 'YCQ'
    		),
    	'6' => array(
	        'id' => 'falcon',
	        'base' => 'YDT',
	        'dest1' => 'YCD',
	        'dest2' => 'ZGF',
	        'dest3' => 'YXC'
    		),
    	'7' => array(
	        'id' => 'goose',
	        'base' => 'YGE',
	        'dest1' => 'ZMH',
	        'dest2' => 'YYJ',
	        'dest3' => 'YVE'
    		),
    	'8' => array(
	        'id' => 'heron',
	        'base' => 'YKA',
	        'dest1' => 'YGE',
	        'dest2' => 'YBD',
	        'dest3' => 'YSE'
    		),
    	'9' => array(
	        'id' => 'ibis',
	        'base' => 'YLW',
	        'dest1' => 'YCP',
	        'dest2' => 'YAA',
	        'dest3' => 'YCG'
    		),
    	'10' => array(
	        'id' => 'junco',
	        'base' => 'YPK',
	        'dest1' => 'YCW',
	        'dest2' => 'ZMH',
	        'dest3' => 'YYF'
    		),
    	'11' => array(
	        'id' => 'kite',
	        'base' => 'YPR',
	        'dest1' => 'ZMT',
	        'dest2' => 'YZP',
	        'dest3' => 'YXT'
    		),
    	'12' => array(
	        'id' => 'loon',
	        'base' => 'YPW',
	        'dest1' => 'YBD',
	        'dest2' => 'ZEL',
	        'dest3' => 'YPU'
    		),
    	'13' => array(
	        'id' => 'magpie',
	        'base' => 'YQZ',
	        'dest1' => 'YXS',
	        'dest2' => 'YWL',
	        'dest3' => 'YKA'
    		),
    	'14' => array(
	        'id' => 'nuthatch',
	        'base' => 'YRV',
	        'dest1' => 'YCG',
	        'dest2' => 'YMB',
	        'dest3' => 'YCZ'
    		),
    	'15' => array(
	        'id' => 'owl',
	        'base' => 'YSN',
	        'dest1' => 'YRV',
	        'dest2' => 'YCZ',
	        'dest3' => 'YVE'
    		),
    	'16' => array(
	        'id' => 'pelican',
	        'base' => 'YVR',
	        'dest1' => 'YPR',
	        'dest2' => 'YXS',
	        'dest3' => 'YXC'
    		),
    	'17' => array(
	        'id' => 'quail',
	        'base' => 'YXC',
	        'dest1' => 'YBD',
	        'dest2' => 'YAZ',
	        'dest3' => 'YCP'
    		),
    	'18' => array(
	        'id' => 'raven',
	        'base' => 'YXS',
	        'dest1' => 'YPR',
	        'dest2' => 'YDQ',
	        'dest3' => 'YVR'
    		),
    	'19' => array(
	        'id' => 'swallow',
	        'base' => 'YXT',
	        'dest1' => 'XQU',
	        'dest2' => 'YYD',
	        'dest3' => 'ZST'
    		),
    	'20' => array(
	        'id' => 'thrush',
	        'base' => 'YXX',
	        'dest1' => 'YDT',
	        'dest2' => 'YMB',
	        'dest3' => 'YLW'
    		),
    	'21' => array(
	        'id' => 'unlikely',
	        'base' => 'YYD',
	        'dest1' => 'YPZ',
	        'dest2' => 'YDL',
	        'dest3' => 'ZST'
    		),
    	'22' => array(
	        'id' => 'vulture',
	        'base' => 'YYE',
	        'dest1' => 'YDL',
	        'dest2' => 'YXJ',
	        'dest3' => 'YXX'
    		),
    	'23' => array(
	        'id' => 'warbler',
	        'base' => 'YYF',
	        'dest1' => 'YHE',
	        'dest2' => 'YKA',
	        'dest3' => 'YXC'
    		),
    	'24' => array(
	        'id' => 'xwing',
	        'base' => 'YYJ',
	        'dest1' => 'YBL',
	        'dest2' => 'YVR',
	        'dest3' => 'YPW'
    		),
    	'25' => array(
	        'id' => 'yellowhammer',
	        'base' => 'YZY',
	        'dest1' => 'YQZ',
	        'dest2' => 'ZEL',
	        'dest3' => 'YGB'
    		),
    	'26' => array(
	        'id' => 'zipper',
	        'base' => 'ZMH',
	        'dest1' => 'YVR',
	        'dest2' => 'YXS',
	        'dest3' => 'YPR'
    		)
		);

	// Constructor
	public function __construct()
	{
		parent::__construct();

		// inject each "record" key into the record itself, for ease of presentation
		foreach ($this->regions as $key => $record)
		{
			$record['key'] = $key;
			$this->regions[$key] = $record;
		}

		foreach ($this->airlines as $key => $record)
		{
			$record['key'] = $key;
			$this->airlines[$key] = $record;
		}
	}

	// retrieve a single region or airline, null if not found
	public function get($set, $which)
	{
		return !isset($this->$set[$which]) ? null : $this->$set[$which];
	}

	// retrieve all of the regions or airlines
	public function all($set)
	{
		return $this->$set;
	}

}
