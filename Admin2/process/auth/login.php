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
 
       $email = "psalmsam84@yahoo.com";
       $password = "psalmsam1234";
       $slesrep = new Admin;
      // $ip = get_ip_address(); 
       $rty =new Admin;
       $salre = $rty->login($email, $password);
       echo json_encode($salre); 
        echo "<br>"; 
       print_r($_SESSION['admin']);     

       

?>