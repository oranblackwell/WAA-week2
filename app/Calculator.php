<?php

/**
 * Web Architectures - Week 2
 * SimpleTest PHP unit Calculator Test
 *
 **/
class Calculator
{
    /**
     * Create a list of numbers
     * @param integer $number1 The first number
     * @param integer $number2 The second number
     * @return integer $result The sum of the integers
     */
    public function add($number1, $number2)
    {
        if (is_numeric($number1) && is_numeric($number2)) {
            return ($number1 + $number2);
        } else {
            return false;
        }
    }
}