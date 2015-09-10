<?php

// function  to test a number 
// generates E_USER_WARNING if number is a float
// generates E_USER_ERROR is number is negative

function testNumber($num)  { 
// float 
// trigger a warning 
    if (is_float($num))  {
        trigger_error("Number $num is not an integer", E_USER_WARNING); } 
// negative // trigger a fatal error 
    if ($num < 0) { 
        trigger_error("Number $num is negative", E_USER_ERROR); } 
        
    } 
    
    function myErrorHandler( $type, $msg, $file, $line, $context ) {
        
        switch($type){
            
            case E_USER_ERROR:
               die("Fatal error on line $line of $file: $msg<br/>");     
            break;
            
        }
        
    }
    
    // set the name of the custom handler 
    set_error_handler('myErrorHandler');
    // test the function with different values 
    testNumber(100); 
    testNumber(5.6);
    testNumber(-8); 
