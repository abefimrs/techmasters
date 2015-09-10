<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class dbHandler {
        
        private $database;
        private $server;
        private $username;
        private $password;

        public function __construct($server, $username, $password, $database) {
            $this->server = $server;
            $this->username = $server;
            $this->password = $password;
            $this->database = $database;
        }
        
        public function setConnection() {            
            
            if(!mysqli_connect($this->server, $this->username, $this->password, $this->database) ) {     
                throw new DbConnectionExceptional(mysqli_connect_error());
            } else {
                print("DB connection successfull");
            }
            
        }
        
    }
    
    class DbConnectionExceptional extends Exception{}
    
    try {
        
        $con = new dbHandler("localhost", "root", "pass1234", "vdorr");
        $con->setConnection();
        
    } catch ( DbConnectionExceptional $e) {
        
        print(" Conncetion Authintication error ". $e->getMessage());
        
    }