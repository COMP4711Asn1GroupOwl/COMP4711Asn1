<?php
//use PHPUnit\Framework\TestCase;
require_once 'PHPUnit/Autoload.php';
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

class AirportTest extends PHPUnit\Framework\TestCase {
    
    private $CI;
    
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    public function testAirports() {
        $this->CI->load->model('airport');
        $this->CI->task->id = 'XQU';
        $this->CI->task->community = 'Qualicum Beach';
        $this->CI->task->airport = 'Qualicum Beach Airport';
        $this->CI->task->region = 1;
        $this->CI->task->coordinates = '49°20′14″N124°23′38″W';
        $this->CI->task->runway = 1086;
        $this->CI->task->airline = '';
        
        $this->assertEquals('XQU', $this->CI->task->id);
        $this->assertEquals('Qualicum Beach', $this->CI->task->community);
        $this->assertEquals('Qualicum Beach Airport', $this->CI->task->airport);
        $this->assertEquals(1, $this->CI->task->region);
        $this->assertEquals('49°20′14″N124°23′38″W', $this->CI->task->coordinates);
        $this->assertEquals(1086, $this->CI->task->runway);
        $this->assertEmpty($this->CI->task->airline);
        $this->assertNotEmpty($this->CI->task->region);
    }
}
