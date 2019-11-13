<?php
        // required headers
        //header("Access-Control-Allow-Origin: *");
        
        include_once('../../config/config.php');
        include_once('../../functions/functions.php');
        session_start([0, '/', maindomain, true, true]);
        spl_autoload_register(function($class){
            require_once("../../classes/{$class}.php");
            });
        include_once('../../functions/messages.php');
        $fname = 'segun dundu';
        $email = 'segun012@gmail.com';
        $psw = 'kometh1000';
        $phone = '08060913993'; 

       $slesrep = new Salesrep;
       $salre = $slesrep->create($fname, $email, $psw, $phone);
       echo json_encode($salre); 



?>