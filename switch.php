<?php

/*  Problem no:  2 
 * 
 *  Write a switch case statement to decide on student grades.
 *  Note: pass mark is 60. up to 70 is D, up to 80 is C,
 *  up to 90 is B and up to 100 is A.
 */

function printGrade($marks = '') {
    
    switch ($marks) {
        case ($marks > 61 && $marks <= 70):
            echo "Grade D";
            break;
        case ($marks > 71 && $marks <= 80):
            echo "Grade C";            
            break;
        case ($marks > 81 && $marks <= 90):
            echo "Grade B";            
            break;
        case ($marks > 91 && $marks <= 100):
            echo "Grade A";            
            break;
        case 60:
            echo "Pass";
            break;
        default:
            echo "Fail";
            break;
    }
}

printGrade(90);


