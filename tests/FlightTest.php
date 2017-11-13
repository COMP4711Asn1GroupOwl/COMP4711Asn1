<?php
require_once 'PHPUnit/Autoload.php';
//use PHPUnit\Framework\TestCase;
if (! class_exists('PHPUnit_Framework_TestCase'))
{
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Test methods in the Airports model.
 *
 * @author Michael
 */


class FlightTest extends PHPUnit_Framework_TestCase {
    
    private $CI;
    
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    public function testAirports() {
        $this->CI->load->model('flights');
        /*$this->CI->flights->data = '';
        $this->CI->flights->airports = '';
        $this->CI->flights->airplanes  = '';
        
        $this->assertEquals('', $this->CI->flights->data);
        $this->assertEquals('', $this->CI->flights->airports);
        $this->assertEquals('', $this->CI->flights->airplanes);
     */   
    }
}
