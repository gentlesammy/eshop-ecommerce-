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
 

       $slesrep = new Salesrep;
       $salre = $slesrep->viewSalesRepList();
       echo json_encode($salre); 



?>