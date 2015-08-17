<?php
    error_reporting(0);
    
    function getBinary($number) {
        $binary = array();
        $bit = $number % 2;
        if($number > 0) {            
            $number = round($number/2, 0, PHP_ROUND_HALF_DOWN);
            getBinary($number);
            echo $bit;
        }        
    }    
    
    function getDecimalFrmBinary($binary) {
        $decimal = 0;
        $i = 0;
        while($binary !=0) {
            $rem = $binary % 10;
            $binary = $binary / 10;
            $decimal += $rem * pow(2, $i);
            $i++;
        }
        return $decimal;
    }
   
?>
<html>
    <head>
        <title>Binary to Decimal and Decimal to Binary Conversion</title>
    </head>
    <body>
        
        <form action="" method="post">
            
            <h1>Decimal to Binary Conversion</h1>
            <input type="text" name="decimal" >
            <p>Binary:: <?php echo getBinary($_POST['decimal']);?></p>
            
            <h1>Binary to Decimal Conversion</h1>
            <input type="text" name="binary" >
            <p>Decimal:: <?php echo getDecimalFrmBinary($_POST['binary']);?></p>
            
            <input type="submit" value="Submit">
            
        </form>        
    </body>
</html>