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

  /*  
    function create_pyramid($limit) {
    for($row = 1; $row < $limit; $row ++) {
        $stars = str_repeat('*', ($row - 1) * 2 + 1);
        $space = str_repeat(' ', $limit - $row);
        echo $space . $stars . '<br/>';
    }
}
echo "<pre>" ;
create_pyramid(7);

*/
/*
    
    function create_pyramid($limit) {
        
        for($row = 1; $row <= $limit; $row ++) {

            echo round(($limit/2)*$row);
            echo '<br>';

        }
    }
    
    echo "<pre>";
    
    create_pyramid(7);
*/

/*
        7/2-1 = 
*/
    
    $i = 1;
    $limit = 7;
    $cond = TRUE;
    while(0 < $limit) {
        
        if($cond) {
            echo $i;
            $i++;
            if($i == 4) 
                $cond = FALSE;
        } else {
            echo $i;
            $i--;
            
        }
        
    }