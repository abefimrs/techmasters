<?php

/*
    Mr. Rahim bought some lottery tickets.
    The lottery draw has been published and it is said that, if the total sum of the digits in the 
    lottery is a multiple of 7 then they will win 5000 Taka.
    Write a program to help Mr. Rahim to find out if he won.
*/

    function lottery ($digits) {
        
        $numbers = str_split($digits);
        $sum = 0;
        foreach($numbers as $val) {
            $sum += $val;
        }
        
        if(($sum % 7) == 0) {
            
            echo "Your Lottry Number:".$digits." is Devided by 7";
            
        }        
        
    }
    
    lottery(1006);