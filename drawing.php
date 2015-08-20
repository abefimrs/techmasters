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
        $rol = round(7/2);
        for($k = 1; $k < $i; $k++) {
            echo "X";
            if($k == $rol) { $k = 4;}
        }        
        echo "<br />";        
    }
    
}

    draw();
