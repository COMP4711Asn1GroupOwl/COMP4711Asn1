<?php
require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;
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


class FlightTest extends TestCase {
    
    private $CI;
    
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    public function testAirports() {
        $this->CI->load->model('flights');
        $this->CI->task->data = '';
        $this->CI->task->airports = '';
        $this->CI->task->airplanes  = '';
        
        $this->assertEquals('', $this->CI->task->data);
        $this->assertEquals('', $this->CI->task->airports);
        $this->assertEquals('', $this->CI->task->airplanes);
        
    }
}
