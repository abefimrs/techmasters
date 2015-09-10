<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// define a custom error handler
    set_error_handler('oops');
// initialize the $string variable
$string = 'a string';
// explode() a string
// this will generate a warning because the number of arguments to explode() is incorrect
// the error will be caught by the custom error handler
explode($string);
// custom error handler
function oops($type, $msg, $file, $line, $context) {
    echo "<h1>Error!</h1>";
    echo "An error occurred while executing this script. Please contact the <a href=mailto:webmaster@somedomain.com>webmaster</a> to report this error.";
    echo "<p />";
    echo "Here is the information provided by the script:";
    echo "<hr><pre>";
    echo "Error code: $type<br/>";
    echo "Error message: $msg<br/>";
    //print_r($context);
    echo "</pre><hr>";
    
}

