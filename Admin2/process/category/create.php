
<?php
        // required headers
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        include_once('../../config/config.php');
        include_once('../../functions/functions.php');
        session_start([0, '/', maindomain, true, true]);
        spl_autoload_register(function($class){
            require_once("../../classes/{$class}.php");
            });
        include_once('../../functions/messages.php');


        
       $name = $_GET['name'];
       $description = $_GET['description'];
       $catcr = new Category;
       $cat = $catcr->create($name, $description);
       echo json_encode($cat); 



?>