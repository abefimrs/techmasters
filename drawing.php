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
        
        for($k = $i; $k > ($k +=$k); $k--) {
            //echo "X";
            echo $k;            
        }
        
        echo "<br />";        
    }
    
}

    draw();
