<?php

/* 
    OBJECT 
 *  • In real world object is a material thing that can be seen and touched.
 *  • In OOP, object is a self-contained entity that consist of both data and procedures.
 *  • An instance of a class
 */

class Object{
    
    public $name;
    public $dateOfBirth;

    public function __construct($name = '', $dateOfBirth = '') {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }
    
    public function dayCalculation() {
        
    }
    
    public function ageCalculation() {        
        return date_diff(date_create($this->dateOfBirth), date_create("today"))->y;        
    }
    
    
    
}

    $customer = new Object("asif", '1980-12-8');
    echo "Mr.".$customer->name." Your age:".$customer->ageCalculation();