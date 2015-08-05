<?php

/*
 * These tests are to see how you perform with algorithms. The code you write is more important than the answer you get.
 * */
class ThirdTests extends PHPUnit_Framework_TestCase
{

    public function testAlgo1(){
        /*
         * Given the array below:
         *
         * 1. Count the number of occurrences of non-zero elements and assign to this to a variable x
         * 2. Modify the array so that non-zero elements appear first
         * */

        $array = [13,5,0,8,0,22,0,0,9,15,44];



        $this->assertEquals($x, 7);
        $this->assertEquals(array_splice($array,7), [0,0,0,0]);
    }
}