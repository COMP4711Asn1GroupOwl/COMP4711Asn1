<?php
//use PHPUnit\Framework\TestCase;
require_once 'PHPUnit/Autoload.php';
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

class Airport_test extends PHPUnit_Framework_TestCase {
    
    private $CI;
    
    
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();      
    }
    
    public function testAirports() {
        $this->CI->load->model('airport');
       
        $this->CI->airport->id = "XQU";
        $this->CI->airport->community = "Qualicum Beach";
        $this->CI->airport->airport = "Qualicum Beach Airport";
        $this->CI->airport->region = 1;
        $this->CI->airport->coordinates = "49°20′14″N124°23′38″W";
        $this->CI->airport->runway = 1086;
        $this->CI->airport->airline = '';
        
        $this->assertEquals('XQU', $this->CI->airport->id);
        $this->assertEquals('Qualicum Beach', $this->CI->airport->community);
        $this->assertEquals('Qualicum Beach Airport', $this->CI->airport->airport);
        $this->assertEquals(1, $this->CI->airport->region);
        $this->assertEquals('49°20′14″N124°23′38″W', $this->CI->airport->coordinates);
        $this->assertEquals(1086, $this->CI->airport->runway);
        $this->assertEmpty($this->CI->airport->airline);
        $this->assertNotEmpty($this->CI->airport->region);
    }
}
