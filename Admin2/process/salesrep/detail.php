<?php
        
        include_once('../../config/config.php');
        include_once('../../functions/functions.php');
        session_start([0, '/', maindomain, true, true]);
        spl_autoload_register(function($class){
            require_once("../../classes/{$class}.php");
            });
        include_once('../../functions/messages.php');
 
       
       $srid = 4;
       $slesrep = new Salesrep;
       $salre = $slesrep->detail($srid);
       echo json_encode($salre); 



?>