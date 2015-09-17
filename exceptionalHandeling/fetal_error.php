<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    register_shutdown_function('fatalErrorHandler');
    require_once("model/model.php");

    function fatalErrorHandler() {
        
        # Getting last error
            $error = error_get_last();
            //print_r($error);
        # Checking if last error is a fatal error
            if (($error['type'] === E_ERROR) || ($error['type'] === E_USER_ERROR)) {
        # Here we handle the error, displaying HTML, logging, ...
                echo 'Sorry, a serious error has occured in ' . $error['file'];
            }
            
            
    }

    # Registering shutdown function


   