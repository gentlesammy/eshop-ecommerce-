
<?php
        include_once('../../config/config.php');
        include_once('../../functions/functions.php');
        session_start([0, '/', maindomain, true, true]);
        spl_autoload_register(function($class){
            require_once("../../classes/{$class}.php");
            });
        include_once('../../functions/messages.php');

        
        $id = $_POST['id'];
        $currentstatus = $_POST['currentstatus'];
        $cat = new Category;
        $cartchange = $cat->categoryStatusUpdate($currentstatus, $id); 
        echo (json_encode($cartchange));

    

       





?>