<?php

/*
 *   Write a program to run from 1 to 20,000 and only prints numbers which are only divided by 7.
 * 
 */
    
    function divisorSeven() {
        
        $divident = array();
        $str = '';
        for($i = 1; $i <= 20000; $i++) {
            if(($i % 7) == 0) {
               //$divident[] = $i; 
                $str .= $i." ,";
            }           
        }
        
        //return $divident;
        return $str;
        
    }
    
    
    $result = divisorSeven();
    //echo "<pre>";print_r($result);
    echo $result;