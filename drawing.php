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

function draw() {
    
    for ($i = 1; $i <= 7; $i++) {
        //$rol = 
        for($k = $i; $k > 0; $k--) {
            echo "X";
            //echo $k - $i;            
        }
        
        echo "<br />";        
    }
    
}

    draw();
