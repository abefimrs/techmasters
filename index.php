<?php

   
    function getBinary($number) {
        $bit = $number % 2;
        if($number > 0) {            
            $number = round($number/2, 0, PHP_ROUND_HALF_DOWN);
            getBinary($number);
            echo $bit;
        }
    }
    
    function getDecimalFrmBinary($binary) {
       $array = str_split($binary);
       //print_r($array);
       $sum = 0;
       for($i = count($array)-1; $i >= 0; $i--) {
         //echo $array[$i];
         //echo $i;
         if($array[$i] == 0) {
            //echo $sum = 1; 
         } else {
            echo $sum = pow(2,$i); echo "<br />";
         }
       }
       
       //echo $sum;
    }
    $hexadecimal = 6;
    //echo base_convert($hexadecimal, 10, 2);
    getBinary($hexadecimal);
    echo "<br />";
    getDecimalFrmBinary(110);

?>