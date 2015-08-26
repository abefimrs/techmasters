<?php

/*
  Write a program to print the following drawing
 
  X
  XX
  XXX
  XXXX
  XXX
  XX
  X

 */

function draw($limit) {
   
    
    $i = 1;
    $cond = TRUE;
    //while($i < $limit) {
    while($i!=0) {
        
        if($cond) {            
            echo str_repeat('X', $i);
            echo "<br />";
            $i++;
            if($i == round($limit/2) )
                $cond = FALSE;
           
        } else {
            echo str_repeat('X', $i);
            echo "<br />";
            $i--;
            
        }
        
    }
}


draw(100);
