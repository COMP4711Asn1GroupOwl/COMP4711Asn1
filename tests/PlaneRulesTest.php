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
 * Description of PlaneRulesTest
 *
 * @author Michael
 */
class PlaneRulesTest extends PHPUnit_Framework_TestCase {
    
    // Plane must be back before 10PM PST
    private $CI;
    
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
    }
    
}
