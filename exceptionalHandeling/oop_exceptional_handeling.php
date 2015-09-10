<?php

// PHP 5
// sub-class the Exception class
class NegativeNumException extends Exception {}
class OutOfRangeException extends Exception {}
class FloatException extends Exception {}

// function to test a number
function testNumber($num) {
// float
// trigger an exception
    if (is_float($num)) {
        throw new FloatException($num);
    }
// negative
// trigger an exception
    if ($num < 0) {
        throw new NegativeNumException($num);
    }
// out of range
// trigger an exception
    if ($num > 1000 || $num < 100) {
        throw new OutOfRangeException($num);
    }
}

// try this code
    try {
        testNumber(-19);
    }
    // catch errors, if any
    catch (NegativeNumException $e) {
        print 'A negative number was provided (' . $e->getMessage() . '). Please provide a positive integer between 100 and 1000.<br />';
    } catch (OutOfRangeException $e) {
        print 'The number provided is out of range (' . $e->getMessage() . '). Please provide a positive integer between 100 and 1000.<br />';
    } catch (FloatException $e) {
        print 'The number provided is not an integer (' . $e->getMessage() . '). Please provide a positive integer between 100 and 1000.<br />';
    } catch (Exception $e) {
        print 'Error message: ' . $e->getMessage() . '<br />';
        print 'Error code: ' . $e->getCode() . '<br />';
        print 'File and line: ' . $e->getFile() . '(' . $e->getLine() . ')<br />';
        print 'Trace: ' . $e->getTraceAsString() . '<br />';
    }
?>