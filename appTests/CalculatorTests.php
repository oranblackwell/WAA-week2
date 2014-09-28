<?php
//include "fiddle_envlib.php";
require_once "../simpletest/autorun.php";

class CalculatorTests extends UnitTestCase
{

    private $calculator;

    /* Create instance of class */
    public function setUp()
    {
        require_once('../app/Calculator.php');
        $this->calculator = new Calculator();

    }

    public function tearDown()
    {
        $this->calculator = NULL;
    }


    /**
     * Test to add two numbers
     */
    public function testAdd()
    {
        /* call method to test */
        $result = $this->calculator->add(1, 2);
        $this->assertEqual(3, $result);

    }

    /**
     * Test to subtract two numbers
     */
    public function testSubtract()
    {
    }

    /**
     * Test to multiply two numbers
     */
    public function testMultiply()
    {
    }

    /**
     * Test to divide two numbers
     */
    public function testDivide()
    {
    }
}