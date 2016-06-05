<?php
/*
 * PHPUnit calculator test class for testing arithmetic operatorations.
 */
require 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {
    
    private $calculatorTest;
 
    protected function setUp()
    {
        $this->calculatorTest = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculatorTest = NULL;
    }
    /**
     * Tests the addition
     */
    public function testadd() {
        $result = $this->calculatorTest->add(1, 2);
        $this->assertEquals(3, $result);
    }
    /**
     * Tests the subtraction
     */
    public function testsubtract() {
        $equals = $this->calculatorTest->subtract(2, 1);
        $this->assertEquals(1, $equals);
    }
    /**
     * Tests the multiplication
     */
    public function testmultiply() {
        $equals = $this->calculatorTest->multiply(1, 2);
        $this->assertEquals(2, $equals);
    }
    /**
     * Tests the division
     */
    public function testdivide() {
        $equals = $this->calculatorTest->divide(10, 2);
        $this->assertEquals(5, $equals);
    }

}
