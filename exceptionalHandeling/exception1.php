<?php

error_reporting(0);
// try this code 
try {
    $file = 'somefile.txt';
// open file 
    if (!$fh = fopen($file, 'r')) {

        throw new Exception('Could not open file!');
    }
// read file contents 
    if (!$data = fread($fh, filesize($file))) {

        throw new Exception('Could not read file!');
    }
// close file 
    fclose($fh);
// print file contents 
    echo $data;
}
// catch errors if any
catch (Exception $e) {
    print 'Something bad just happened...';
}
?>