<?php
/**
 * Created by PhpStorm.
 * User: Oran
 * Date: 28/09/2014
 * Time: 15:48
 */
require_once "../simpletest/autorun.php";

class CalculatorTestsSuite extends TestSuite
{
    function __construct()
    {
        parent::__construct();
        $this->addFile('CalculatorTests.php');
       // $this->addFile('CalculatorTestsWithStrings.php');
    }
} 