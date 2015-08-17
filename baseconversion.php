<?php

/* 
    Write a PHP program where I can define a number and you will detect the base of the number and 
    convert it to another base defined by me.
 */

    

    function getBinary($number) {
        $binary = array();
        $bit = $number % 2;
        if($number > 0) {            
            $number = round($number/2, 0, PHP_ROUND_HALF_DOWN);
            getBinary($number);
            echo $bit;
        }        
    } 
    
    function getBaseNumber() {
        
    }

