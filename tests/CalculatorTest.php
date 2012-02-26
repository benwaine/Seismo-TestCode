<?php

require_once __DIR__ . '/../code/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{

    protected $fixture;
    
    public function setUp()
    {
       $this->fixture = new Calculator();
    }
    
    public function testAdd()
    {
        $result = $this->fixture->add(1, 2);
        $this->assertEquals(3, $result);
    }
    
}


