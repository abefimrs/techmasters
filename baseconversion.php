<?php
//error_reporting(0);
/*
  Write a PHP program where I can define a number and you will detect the base of the number and
  convert it to another base defined by me.
 */

    function getDecimal($number = '',$fromBase = '') {
        if($fromBase == 10 ) { return $number;}
        $decimal = 0;
        $i = 0;
        while ($number != 0) {
            $rem = $number % 10;
            $number = $number / 10;
            $decimal += $rem * pow($fromBase, $i);
            $i++;
        }
        
        return $decimal;  
        
    }

    function getBaseNumber($number = '',$toBase = '') {
       
        $str = '';
        while ($number > 0){
            $bin = $number % $toBase;
            $number = round($number/$toBase, 0, PHP_ROUND_HALF_DOWN);
            $str = $bin.$str;
        }
        return $str;
    }
    
    $fromNumber = $_POST['fromNumber'];
    $base = $_POST['base'];
    //$toNumber = $_POST['toNumber'];
    
    // Convert into decimla 
    $decimal = getDecimal($fromNumber,$base);
    
    // Convert into desier number
    $binary = getBaseNumber($decimal,2);
    $octal = getBaseNumber($decimal,8);
    $hexadecimal =  getBaseNumber($decimal,16);  
    
    echo base_convert($decimal,10,8); 
            
    
 ?>   
    
<html>
    <head>
        <title>Number Conversion</title>
    </head>
    <body>
        
        <form action="" method="post">
            
            <h1>Number </h1>
            <input type="text" name="fromNumber" >
            
            <h1>Base of the Number</h1>
            <input type="text" name="base" >
            
            <h1>In Binary</h1>
            <p>Binary:: <?php echo $binary;?></p>
            
            <h1>In Octal</h1>
            <p>Octal:: <?php echo $octal;?></p>
            
            <h1>In Hexadecimal</h1>
            <p>Hexadecimal:: <?php echo $hexadecimal;?></p>
            
            <input type="submit" value="Submit">
            
        </form> 
        
    </body>
</html>
    
