<?php
// required headers


include_once('../../config/config.php');
include_once('../../functions/functions.php');
session_start([0, '/', maindomain, true, true]);
spl_autoload_register(function($class){
    require_once("../../classes/{$class}.php");
    });
include_once('../../functions/messages.php');




        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $con = new Category;
        $thy = $con->edit($id, $name, $description);
        echo json_encode($thy);
        


 ?>