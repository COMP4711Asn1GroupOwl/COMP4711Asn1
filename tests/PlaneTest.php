<?php
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
 * Description of PlaneTest
 *
 * @author Lancelei
 */
class PlaneTest extends PHPUnit_Framework_TestCase {
    
    private $CI;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
    public function testPlane() {
        $this->CI->load->model('airplane');
        
        $this->CI->airplane->id = "avanti";
        $this->CI->airplane->manufacturer = "piaggo";
        $this->CI->airplane->model = "Avanti II";
        $this->CI->airplane->price = "7195";
        $this->CI->airplane->seats = "8";
        $this->CI->airplane->reach = "2797";
        
        $this->CI->airplane->id = "tester";
        
        $this->assertContains("avanti", $this->CI->airplane->id);
        $this->assertContains("piaggo", $this->CI->airplane->manufacturer);
        $this->assertContains("Avanti II", $this->CI->airplane->model);
        $this->assertContains("7195", $this->CI->airplane->price);
        $this->assertContains("8", $this->CI->airplane->seats);
        $this->assertContains("2797", $this->CI->airplane->reach);
        $this->assertNotContains("tester", $this->CI->airplane->id);
    }
    
}